<?php

namespace VarejoFacil\Services;

use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Models\Preco;
use \VarejoFacil\Response;

class PrecoService
{
    private $sdk;

    function __construct(VarejoFacilSDK $sdk)
    {
        $this->sdk = $sdk;
    }

    public function listByProductId(Int $produtoId, array $filter = [])
    {
        $resource = '/v1/produto/produtos/' . $produtoId . '/precos';
        $resposta = $this->sdk->get($resource, []);
        $precos = [];
        if ($resposta) {
            foreach ($resposta as $item) {
                $preco = $this->mapItemToPreco($item);
                array_push($precos, $preco);
            }
        }

        return $precos;
    }

    public function list(String $filter = '')
    {
        if ($filter) {
            $filter .= '&q=' . $filter;
        }

        $resource = '/v1/produto/precos';

        $resp = new Response(0, 500, 0);

        do {
            $resposta = $this->sdk->get($resource . '?start=' . $resp->getStart() . $filter . '&count=' . $resp->getCount(), []);

            $resp->setTotal($resposta->total ?? 0)
                ->setCount($resposta->count ?? 0)
                ->moveStart($resposta->count ?? 0);

            if (isset($resposta->items)) {
                foreach ($resposta->items as $item) {
                    $preco = $this->mapItemToPreco($item);
                    $resp->addItem($preco);
                }
            }
        } while ($resp->getStart() < $resp->getTotal());

        return $resp;
    }

    public function update(Preco $preco)
    {
        $id = $preco->getId();

        if (!$id) {
            throw new \Exception('O id do preço é obrigatório para atualização');
        }
    
        // Correção: concatenando o $id corretamente na URL
        $resource = '/v1/produto/precos/' . $id;
        
        $resposta = $this->sdk->put($resource, [
            'id' => $id,
            'lojaId' => $preco->getLojaId(),
            'produtoId' => $preco->getProdutoId(),
            'idExterno' => $preco->getIdExterno(),
            
            // Preço 1
            'precoVenda1' => (float) $preco->getPrecoVenda1(),
            'precoOferta1' => (float) $preco->getPrecoOferta1(),
            'margemPreco1' => (float) $preco->getMargemPreco1(),
            'dataUltimoReajustePreco1' => $preco->getDataUltimoReajustePreco1(),
            
            // Preço 2
            'precoVenda2' => (float) $preco->getPrecoVenda2(),
            'precoOferta2' => (float) $preco->getPrecoOferta2(),
            'margemPreco2' => (float) $preco->getMargemPreco2(),
            'quantidadeMinimaPreco2' => (float) $preco->getQuantidadeMinimaPreco2(),
            'dataUltimoReajustePreco2' => $preco->getDataUltimoReajustePreco2(),
            
            // Preço 3
            'precoVenda3' => (float) $preco->getPrecoVenda3(),
            'precoOferta3' => (float) $preco->getPrecoOferta3(),
            'margemPreco3' => (float) $preco->getMargemPreco3(),
            'quantidadeMinimaPreco3' => (float) $preco->getQuantidadeMinimaPreco3(),
            'dataUltimoReajustePreco3' => $preco->getDataUltimoReajustePreco3(),
            
            // Configurações e Custos
            'descontoMaximo' => (float) $preco->getDescontoMaximo(),
            'permiteDesconto' => (bool) $preco->getPermiteDesconto(),
            'custoProduto' => (float) $preco->getCustoProduto(),
            'precoMedioDeReposicao' => (float) $preco->getPrecoMedioDeReposicao(),
            'precoFiscalDeReposicao' => (float) $preco->getPrecoFiscalDeReposicao(),
            'incentivoEmZonaFranca' => $preco->getIncentivoEmZonaFranca(),
            'origem' => $preco->getOrigem()
        ]);
        
        return $resposta;
    }

    /**
     * Mapeia um item stdClass retornado pela API para o Model VarejoFacil\Models\Preco
     */
    private function mapItemToPreco($item): Preco
    {
        $preco = new Preco($item->id, $item->produtoId, $item->lojaId);
        
        if (isset($item->idExterno)) $preco->setIdExterno($item->idExterno);

        if (isset($item->precoVenda1)) $preco->setPrecoVenda1($item->precoVenda1);
        if (isset($item->precoOferta1)) $preco->setPrecoOferta1($item->precoOferta1);
        if (isset($item->margemPreco1)) $preco->setMargemPreco1($item->margemPreco1);
        if (isset($item->dataUltimoReajustePreco1)) $preco->setDataUltimoReajustePreco1($item->dataUltimoReajustePreco1);

        if (isset($item->precoVenda2)) $preco->setPrecoVenda2($item->precoVenda2);
        if (isset($item->precoOferta2)) $preco->setPrecoOferta2($item->precoOferta2);
        if (isset($item->margemPreco2)) $preco->setMargemPreco2($item->margemPreco2);
        if (isset($item->quantidadeMinimaPreco2)) $preco->setQuantidadeMinimaPreco2($item->quantidadeMinimaPreco2);
        if (isset($item->dataUltimoReajustePreco2)) $preco->setDataUltimoReajustePreco2($item->dataUltimoReajustePreco2);

        if (isset($item->precoVenda3)) $preco->setPrecoVenda3($item->precoVenda3);
        if (isset($item->precoOferta3)) $preco->setPrecoOferta3($item->precoOferta3);
        if (isset($item->margemPreco3)) $preco->setMargemPreco3($item->margemPreco3);
        if (isset($item->quantidadeMinimaPreco3)) $preco->setQuantidadeMinimaPreco3($item->quantidadeMinimaPreco3);
        if (isset($item->dataUltimoReajustePreco3)) $preco->setDataUltimoReajustePreco3($item->dataUltimoReajustePreco3);

        if (isset($item->descontoMaximo)) $preco->setDescontoMaximo($item->descontoMaximo);
        if (isset($item->permiteDesconto)) $preco->setPermiteDesconto($item->permiteDesconto);

        if (isset($item->custoProduto)) $preco->setCustoProduto($item->custoProduto);
        if (isset($item->precoMedioDeReposicao)) $preco->setPrecoMedioDeReposicao($item->precoMedioDeReposicao);
        if (isset($item->precoFiscalDeReposicao)) $preco->setPrecoFiscalDeReposicao($item->precoFiscalDeReposicao);

        if (isset($item->incentivoEmZonaFranca)) $preco->setIncentivoEmZonaFranca($item->incentivoEmZonaFranca);
        if (isset($item->origem)) $preco->setOrigem($item->origem);

        return $preco;
    }
}