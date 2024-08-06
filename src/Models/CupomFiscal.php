<?php

namespace VarejoFacil\Models;

class CupomFiscal extends Entidade
{
    private String $id;
    private Int $identificadorId;
    private Int $sequencial;
    private String $numeroCaixa;
    private String $data;
    private Int $lojaId;
    private Int $funcionarioId;
    private Float $valor;
    private Int $qtdItensCupom;
    private Float $qtdUnidadesCupom;
    private array $itensVenda = [];




    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId(String $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of identificadorId
     */
    public function getIdentificadorId()
    {
        return $this->identificadorId;
    }

    /**
     * Set the value of identificadorId
     *
     * @return  self
     */
    public function setIdentificadorId(Int $identificadorId)
    {
        $this->identificadorId = $identificadorId;

        return $this;
    }

    /**
     * Get the value of sequencial
     */
    public function getSequencial()
    {
        return $this->sequencial;
    }

    /**
     * Set the value of sequencial
     *
     * @return  self
     */
    public function setSequencial(Int $sequencial)
    {
        $this->sequencial = $sequencial;

        return $this;
    }

    /**
     * Get the value of numeroCaixa
     */
    public function getNumeroCaixa()
    {
        return $this->numeroCaixa;
    }

    /**
     * Set the value of numeroCaixa
     *
     * @return  self
     */
    public function setNumeroCaixa(String $numeroCaixa)
    {
        $this->numeroCaixa = $numeroCaixa;

        return $this;
    }

    /**
     * Get the value of data
     */
    public function getData(): String
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */
    public function setData(String $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of lojaId
     */
    public function getLojaId()
    {
        return $this->lojaId;
    }

    /**
     * Set the value of lojaId
     *
     * @return  self
     */
    public function setLojaId(Int $lojaId)
    {
        $this->lojaId = $lojaId;

        return $this;
    }

    /**
     * Get the value of funcionarioId
     */
    public function getFuncionarioId(): Int
    {
        return $this->funcionarioId;
    }

    /**
     * Set the value of funcionarioId
     *
     * @return  self
     */
    public function setFuncionarioId(Int $funcionarioId)
    {
        $this->funcionarioId = $funcionarioId;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): Float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */
    public function setValor(Float $valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of qtdItensCupom
     */
    public function getQtdItensCupom(): Int
    {
        return $this->qtdItensCupom;
    }

    /**
     * Set the value of qtdItensCupom
     *
     * @return  self
     */
    public function setQtdItensCupom(Int $qtdItensCupom)
    {
        $this->qtdItensCupom = $qtdItensCupom;

        return $this;
    }

    /**
     * Get the value of qtdUnidadesCupom
     */
    public function getQtdUnidadesCupom(): Float
    {
        return $this->qtdUnidadesCupom;
    }

    /**
     * Set the value of qtdUnidadesCupom
     *
     * @return  self
     */
    public function setQtdUnidadesCupom(Float $qtdUnidadesCupom)
    {
        $this->qtdUnidadesCupom = $qtdUnidadesCupom;

        return $this;
    }

    /**
     * Get the value of itensVenda
     */
    public function getItensVenda(): array
    {
        return $this->itensVenda;
    }

    /**
     * Set the value of itensVenda
     *
     * @return  self
     */
    public function addItensVenda(ItemVenda $itensVenda)
    {
        $this->itensVenda[] = $itensVenda;

        return $this;
    }
}
