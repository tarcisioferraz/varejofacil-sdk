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

    public function listByProductId(int $produtoId, array $filter = []): array
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

    public function list(string $filter = ''): Response
    {
        $resource = '/v1/produto/custos';
        $resp = new Response(0, 500, 0);

        $params = [
            'count' => $resp->getCount(),
        ];

        if ($filter) {
            $params['q'] = $filter;
        }

        do {
            $params['start'] = $resp->getStart();
            $resposta = $this->sdk->get($resource, $params);

            if (!$resposta || !isset($resposta->items)) {
                break;
            }

            $resp->setTotal($resposta->total)
                ->setCount($resposta->count)
                ->moveStart($resposta->count);

            foreach ($resposta->items as $item) {
                $custo = new Custo($item->id, $item->produtoId, $item->lojaId, $item->custoProduto ?? 0.00);
                $custo->setCustoMedio($item->precoMedioDeReposicao ?? 0.00)
                    ->setCustoFiscal($item->precoFiscalDeReposicao ?? 0.00);

                if (isset($item->idExterno)) {
                    $custo->setIdExterno($item->idExterno);
                }

                $resp->addItem($custo);
            }
        } while ($resp->getStart() < $resp->getTotal());

        return $resp;
    }

    public function atualizar(Custo $custo)
    {
        $resource = '/v1/produto/custos/' . $custo->getId();

        $custoArray = [
            'id'             => $custo->getId(),
            'lojaId'         => $custo->getLojaId(),
            'produtoId'      => $custo->getProdutoId(),
            'custoReposicao' => $custo->getCustoReposicao(),
            'custoFiscal'    => $custo->getCustoFiscal(),
            'custoMedio'     => $custo->getCustoMedio(),
        ];

        $idExterno = $custo->getIdExterno();
        if (!empty($idExterno)) {
            $custoArray['idExterno'] = $idExterno;
        }

        return $this->sdk->put($resource, $custoArray);
    }

    public function delete(Custo $custo)
    {
        $resource = '/v1/produto/custos/' . $custo->getId();

        return $this->sdk->delete($resource);
    }
}
