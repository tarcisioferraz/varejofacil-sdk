<?php

namespace VarejoFacil\Services;

use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Models\Custo;
use \VarejoFacil\Response;

class CustoService
{
    private $sdk;

    function __construct(VarejoFacilSDK $sdk)
    {
        $this->sdk = $sdk;
    }

    public function listByProductId(Int $produtoId, array $filter = [])
    {
        $resource = '/v1/produto/produtos/' . $produtoId . '/custos';
        $resposta = $this->sdk->get($resource, $filter);
        $custos = [];

        if (!$resposta) {
            return $custos;
        }

        foreach ($resposta as $item) {
            $custo = new Custo(
                $item->id,
                $item->produtoId,
                $item->lojaId,
                $item->custoReposicao ?? 0.00
            );

            $custo->setCustoMedio($item->custoMedio ?? 0.00)
                ->setCustoFiscal($item->custoFiscal ?? 0.00);

            if (isset($item->idExterno)) {
                $custo->setIdExterno($item->idExterno);
            }

            $custos[] = $custo;
        }

        return $custos;
    }

    public function list(String $filter = '')
    {

        if ($filter) {
            $filter .= '&q=' . $filter;
        }

        $resource = '/v1/produto/custos';

        $resp = new Response(0, 500, 0);

        do {
            $resposta = $this->sdk->get($resource . '?start=' . $resp->getStart() . $filter . '&count=' . $resp->getCount(), []);

            $resp->setTotal($resposta->total)
                ->setCount($resposta->count)
                ->moveStart($resposta->count);

            if (isset($resposta->items)) {
                foreach ($resposta->items as $item) {

                    $custo = new Custo($item->id, $item->produtoId, $item->lojaId, isset($item->custoProduto) ? $item->custoProduto : 0.00);
                    $custo->setCustoMedio(isset($item->precoMedioDeReposicao) ? $item->precoMedioDeReposicao : $item->precoMedioDeReposicao)
                        ->setCustoFiscal(isset($item->precoFiscalDeReposicao) ? $item->precoFiscalDeReposicao : 0.00);

                    if (isset($item->idExterno)) {
                        $custo->setIdExterno($item->idExterno);
                    }

                    $resp->addItem($custo);
                }
            }
        } while ($resp->getStart() < $resp->getTotal());


        return $resp;
    }

    public function atualizar(Custo $custo)
    {
        $id = $custo->getId();
        $resource = '/v1/produto/custos/' . $id;

        $custoArray = [
            'id' => $custo->getId(),
            //'idExterno' => !empty($custo->getIdExterno()) && $custo->getIdExterno() != 0 ? $custo->getIdExterno() : '',
            'lojaId' => $custo->getLojaId(),
            'produtoId' => $custo->getProdutoId(),
            'custoReposicao' => $custo->getCustoReposicao(),
            'custoFiscal' => $custo->getCustoFiscal(),
            'custoMedio' => $custo->getCustoMedio()
        ];


        $resposta = $this->sdk->put($resource, $custoArray);

        return $resposta;
    }


    public function delete(Custo $custo)
    {
        $id = $custo->getId();
        $resource = '/v1/produto/custos/' . $id;

        $resposta = $this->sdk->delete($resource);

        return $resposta;
    }
}
