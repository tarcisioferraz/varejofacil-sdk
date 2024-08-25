<?php

namespace VarejoFacil\Services;

use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Models\Produto;
use \VarejoFacil\Response;
use \VarejoFacil\Exceptions\VarejoFacilSDKException;

class ProdutoService
{
    private $resource = '/v1/produto/produtos';
    private $sdk;

    function __construct(VarejoFacilSDK $sdk)
    {
        $this->sdk = $sdk;
    }

    public function list(String $filter = '', $count = 500): Response
    {
        if ($filter) {
            $filter = '&q=' . $filter;
        }


        $resp = new Response(0, $count, 0);

        do {
            $resposta = $this->sdk->get($this->resource . '?start=' . $resp->getStart() . $filter . '&count=' . $resp->getCount(), []);
            $resp->setTotal($resposta->total)
                ->setCount($resposta->count)
                ->moveStart($resposta->count);

            if (isset($resposta->items)) {
                foreach ($resposta->items as $item) {
                    $produto = new Produto($item->id, $item->descricao);
                    $produto->setBalanca($item->enviaBalanca)
                        ->setPesoBruto(isset($item->pesoBruto) ? $item->pesoBruto : null)
                        ->setLargura($item->largura)
                        ->setAltura($item->altura)
                        ->setComprimento($item->comprimento)
                        ->setSecaoId($item->secaoId)
                        ->setGrupoId(isset($item->grupoId) ? $item->grupoId : null)
                        ->setSubgrupoId(isset($item->subgrupoId) ? $item->subgrupoId : null);


                    if (isset($item->imagem)) {
                        $urlImagem = $this->sdk->getUrl() . 'arquivo/view?uuid=' . $item->imagem;
                        $produto->setImagem($urlImagem);
                    }
                    $produto->setNCM($item->ncmId);
                    $resp->addItem($produto);
                }
            }
        } while ($resp->getStart() < $resp->getTotal());

        return $resp;
    }

    public function get(int $codProduto): Response
    {
        $resp = new Response();

        $stringCodigo = str_pad($codProduto, 14, '0', STR_PAD_LEFT);
        $produtoExterno = $this->sdk->get($this->resource . '/consulta/' . $stringCodigo, []);

        if (is_null($produtoExterno)) {
            throw new VarejoFacilSDKException('Nenhum Produto com código "' . $codProduto . '" foi encontrado');
        }

        $resp->setTotal(1)
            ->setCount(1)
            ->moveStart(1);

        $produto = new Produto($produtoExterno->id, $produtoExterno->descricao);
        $produto->setBalanca($produtoExterno->enviaBalanca)
            ->setPesoBruto(isset($produtoExterno->pesoBruto) ? $produtoExterno->pesoBruto : null)
            ->setLargura($produtoExterno->largura)
            ->setAltura($produtoExterno->altura)
            ->setComprimento($produtoExterno->comprimento)
            ->setSecaoId($produtoExterno->secaoId)
            ->setGrupoId(isset($produtoExterno->grupoId) ? $produtoExterno->grupoId : null)
            ->setSubgrupoId(isset($produtoExterno->subgrupoId) ? $produtoExterno->subgrupoId : null);

        if (isset($produtoExterno->imagem)) {
            $urlImagem = $this->sdk->getUrl() . 'arquivo/view?uuid=' . $produtoExterno->imagem;
            $produto->setImagem($urlImagem);
        }
        $produto->setNCM($produtoExterno->ncmId);

        $resp->addItem($produto);

        return $resp;
    }

    public function update(Produto $produto)
    {
        $produtoId = $produto->getId();

        if (is_null($produto->getId())) {
            throw new VarejoFacilSDKException('Id do produto deve ser informado');
        }

        if (is_null($produto->getSecaoId())) {
            throw new VarejoFacilSDKException('Produto "' . $produtoId . '" com Secao inválida');
        }

        if (is_null($produto->getGrupoId()) && !is_null($produto->getSubgrupoId())) {
            throw new VarejoFacilSDKException('Produto "' . $produtoId . '" com grupo inválido');
        }

        $resource = '/v1/produto/produtos/' . $produtoId;

        // Recuperando dados previamente cadastrados no vf
        $dados = (array) $this->sdk->get($resource, []);

        $dados['secaoId'] = $produto->getSecaoId();

        if (!is_null($produto->getGrupoId())) {
            $dados['grupoId'] = $produto->getGrupoId();

            if (!is_null($produto->getSubgrupoId())) {
                $dados['subgrupoId'] = $produto->getSubgrupoId();
            }
        }

        $resposta = $this->sdk->put($resource, $dados);

        return $resposta;
    }

    public function count(String $filter = ''): int
    {
        if ($filter) {
            $filter .= '&q=' . $filter;
        }

        $resposta = $this->sdk->get($this->resource . '?start=0' . $filter . '&count=1', []);
        return $resposta->total;
    }
}
