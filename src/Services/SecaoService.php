<?php

namespace VarejoFacil\Services;

use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Models\Secao;
use \VarejoFacil\Response;

class SecaoService
{
    private $resource = '/v1/produto/secoes';
    private $sdk;
    private $waitTime = 30;

    function __construct(VarejoFacilSDK $sdk)
    {
        $this->sdk = $sdk;
    }

    public function list(String $filter = ''): Response
    {
        $start = 0;
        $total = 0;

        if ($filter) {
            $filter .= '&q=' . $filter;
        }

        do {
            $resposta = $this->sdk->get($this->resource . '?start=' . $start . '&count=500' . $filter, []);
            $total = $resposta->total;
            $start += $resposta->count;

            $resp = new Response($resposta->total, $resposta->count, $resposta->start);

            if (isset($resposta->items)) {
                foreach ($resposta->items as $item) {
                    $secao = new Secao($item->id, $item->descricao);
                    $resp->addItem($secao);
                }
            }

            //Pausa de tempo para evitar sobrecarga ao servidor
            if ($total > $start) {
                sleep($this->waitTime);
            }
        } while ($start < $total);


        return $resp;
    }

    public function get(int $secaoId): Secao
    {
        $produtoExterno = $this->sdk->get($this->resource . '/' . $secaoId, []);

        $secao = new Secao($produtoExterno->id, $produtoExterno->descricao);

        return $secao;
    }
}
