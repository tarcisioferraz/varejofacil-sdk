<?php

namespace VarejoFacil\Services;

use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Models\AjusteEstoque;

class AjusteEstoqueService
{
    private $sdk;

    function __construct(VarejoFacilSDK $sdk)
    {
        $this->sdk = $sdk;
    }

    public function ajustar(AjusteEstoque $ajuste)
    {
        $resource = '/v1/estoque/ajustes';

        $ajusteArray = [
            'lojaId' => $ajuste->getLojaId(),
            'localId' => $ajuste->getLocalId(),
            'tipoDeOperacao' => $ajuste->getTipoDeOperacao(),
            'tipoDeAjusteId' => $ajuste->getTipoAjusteId(),
            'dataDaMovimentacao' => $ajuste->getDataDaMovimentacao(),
            'itens' => [
                [
                    'produtoId' => $ajuste->getProdutoId(),
                    'quantidade' => $ajuste->getQuantidade()
                ]
            ]
        ];

        $resposta = $this->sdk->post($resource, $ajusteArray);

        return $resposta;
    }
}
