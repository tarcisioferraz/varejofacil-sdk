<?php

namespace VarejoFacil\Services;

use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Models\SUbGrupo;
use \VarejoFacil\Response;

class SubGrupoService
{
    private $sdk;
    private $waitTime = 30;

    function __construct(VarejoFacilSDK $sdk)
    {
        $this->sdk = $sdk;
    }

    public function listSubGrupos(Int $secaoId, Int $grupoId, String $filter = ''): Response
    {
        $start = 0;
        $total = 0;

        if ($filter) {
            $filter .= '&q=' . $filter;
        }

        do {
            $resource = '/v1/produto/secoes/' . $secaoId . '/grupos/' . $grupoId . '/subgrupos';
            $resposta = $this->sdk->get($resource . '?start=' . $start . '&count=500' . $filter, []);
            $total = $resposta->total;
            $start += $resposta->count;

            $resp = new Response($resposta->total, $resposta->count, $resposta->start);

            if (isset($resposta->items)) {
                foreach ($resposta->items as $item) {
                    $subgrupo = new SubGrupo($item->id, $item->descricao, $item->secaoId, $item->grupoId);
                    $resp->addItem($subgrupo);
                }
            }

            //Pausa de tempo para evitar sobrecarga ao servidor
            if ($total > $start) {
                sleep($this->waitTime);
            }
        } while ($start < $total);


        return $resp;
    }

    public function get(int $secaoId, Int $grupoId, Int $subgrupoId): SubGrupo
    {
        $resource = '/v1/produto/secoes/' . $secaoId . '/grupos/' . $grupoId . '/subgrupos/' . $subgrupoId;
        $subGrupoExterno = $this->sdk->get($resource, []);

        $subGrupo = new SubGrupo($subGrupoExterno->id, $subGrupoExterno->descricao, $subGrupoExterno->secaoId, $subGrupoExterno->grupoId);

        return $subGrupo;
    }
}
