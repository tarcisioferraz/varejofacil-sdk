<?php

namespace VarejoFacil\Models;

class AjusteEstoque extends Entidade
{
    private $id;
    private $lojaId;
    private $localId;
    private $tipoAjusteId;

    private $quantidade;
    private $dataDaMovimentacao;
    private $produtoId;
    private $tipoDeOperacao;


    const ENTRADA = 'ENTRADA';
    const SAIDA = 'SAIDA';

    function __construct(Int $id, Int $lojaId, Int $produtoId, Int $localId, Int $tipoAjusteId, $tipoDeOperacao, Float $quantidade, $dataDaMovimentacao = null)
    {
        $this->id = $id;
        $this->lojaId = $lojaId;
        $this->produtoId = $produtoId;
        $this->localId = $localId;
        $this->quantidade = $quantidade;
        $this->tipoAjusteId = $tipoAjusteId;
        $this->dataDaMovimentacao = is_null($dataDaMovimentacao) ? date('Y-m-d') : $dataDaMovimentacao;
        $this->tipoDeOperacao = $tipoDeOperacao;
    }

    public function getId(): Int
    {
        return $this->id;
    }

    public function getProdutoId()
    {
        return $this->produtoId;
    }

    public function getLojaId()
    {
        return $this->lojaId;
    }

    public function getLocalId()
    {
        return $this->localId;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getTipoAjusteId()
    {
        return $this->tipoAjusteId;
    }

    public function getDataDaMovimentacao()
    {
        return $this->dataDaMovimentacao;
    }

    public function getTipoDeOperacao()
    {
        return $this->tipoDeOperacao;
    }
}
