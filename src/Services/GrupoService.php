<?php

namespace VarejoFacil\Services;

use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Models\Grupo;
use \VarejoFacil\Response;

class GrupoService
{
    private $sdk;
    private $waitTime = 30;

    function __construct(VarejoFacilSDK $sdk)
    {
        $this->sdk = $sdk;
    }

    public function listGruposBySecaoId(Int $secaoId, String $filter = ''): Response
    {
        $start = 0;
        $total = 0;

        if ($filter) {
            $filter .= '&q=' . $filter;
        }

        do {
            $resource = '/v1/produto/secoes/' . $secaoId . '/grupos';
            $resposta = $this->sdk->get($resource . '?start=' . $start . '&count=500' . $filter, []);
            $total = $resposta->total;
            $start += $resposta->count;

            $resp = new Response($resposta->total, $resposta->count, $resposta->start);

            if (isset($resposta->items)) {
                foreach ($resposta->items as $item) {
                    $grupo = new Grupo($item->id, $item->nome, $item->secaoId);
                    $resp->addItem($grupo);
                }
            }

            //Pausa de tempo para evitar sobrecarga ao servidor
            if ($total > $start) {
                sleep($this->waitTime);
            }
        } while ($start < $total);


        return $resp;
    }

    public function get(int $secaoId, Int $grupoId): Grupo
    {
        $resource = '/v1/produto/secoes/' . $secaoId . '/grupos/' . $grupoId;
        $grupoExterno = $this->sdk->get($resource, []);

        $grupo = new Grupo($grupoExterno->id, $grupoExterno->descricao, $grupoExterno->secaoId);

        return $grupo;
    }
}
