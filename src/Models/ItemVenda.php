<?php

namespace VarejoFacil\Models;

class ItemVenda extends Entidade
{
    private Int $id;
    private Int $produtoId;
    private Int $funcionarioVendedorId;
    private Float $quantidadeVenda;
    private Float $valorUnidade;
    private Float $valorAcrescimo;
    private Float $valorDesconto;
    private Float $valorTotal;
    private Float $precoVenda;
    private Float $valorServico;
    private Float $fatorBonificacao;
    private Float $precoCusto;
    private Float $precoCustoMedio;
    private Float $precoCustoFiscal;
    private Float $valorDoDescontoMegaCaixa;
    private Bool $participouPromocaoDesconto;
    private String $tipoBonificacao;
    private Int $tipo;
    private Int $tipoPreco;

    /**
     * Get the value of id
     */
    public function getId(): Int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId(Int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of produtoId
     */
    public function getProdutoId()
    {
        return $this->produtoId;
    }

    /**
     * Set the value of produtoId
     *
     * @return  self
     */
    public function setProdutoId(Int $produtoId)
    {
        $this->produtoId = $produtoId;

        return $this;
    }

    /**
     * Get the value of funcionarioVendedorId
     */
    public function getFuncionarioVendedorId(): Int
    {
        return $this->funcionarioVendedorId;
    }

    /**
     * Set the value of funcionarioVendedorId
     *
     * @return  self
     */
    public function setFuncionarioVendedorId(Int $funcionarioVendedorId)
    {
        $this->funcionarioVendedorId = $funcionarioVendedorId;

        return $this;
    }

    /**
     * Get the value of quantidadeVenda
     */
    public function getQuantidadeVenda(): Float
    {
        return $this->quantidadeVenda;
    }

    /**
     * Set the value of quantidadeVenda
     *
     * @return  self
     */
    public function setQuantidadeVenda(Float $quantidadeVenda)
    {
        $this->quantidadeVenda = $quantidadeVenda;

        return $this;
    }

    /**
     * Get the value of valorUnidade
     */
    public function getValorUnidade(): Float
    {
        return $this->valorUnidade;
    }

    /**
     * Set the value of valorUnidade
     *
     * @return  self
     */
    public function setValorUnidade(Float $valorUnidade)
    {
        $this->valorUnidade = $valorUnidade;

        return $this;
    }

    /**
     * Get the value of valorAcrescimo
     */
    public function getValorAcrescimo(): Float
    {
        return $this->valorAcrescimo;
    }

    /**
     * Set the value of valorAcrescimo
     *
     * @return  self
     */
    public function setValorAcrescimo(Float $valorAcrescimo)
    {
        $this->valorAcrescimo = $valorAcrescimo;

        return $this;
    }

    /**
     * Get the value of valorDesconto
     */
    public function getValorDesconto(): Float
    {
        return $this->valorDesconto;
    }

    /**
     * Set the value of valorDesconto
     *
     * @return  self
     */
    public function setValorDesconto(Float $valorDesconto)
    {
        $this->valorDesconto = $valorDesconto;

        return $this;
    }

    /**
     * Get the value of valorTotal
     */
    public function getValorTotal(): Float
    {
        return $this->valorTotal;
    }

    /**
     * Set the value of valorTotal
     *
     * @return  self
     */
    public function setValorTotal(Float $valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get the value of precoVenda
     */
    public function getPrecoVenda(): Float
    {
        return $this->precoVenda;
    }

    /**
     * Set the value of precoVenda
     *
     * @return  self
     */
    public function setPrecoVenda(Float $precoVenda)
    {
        $this->precoVenda = $precoVenda;

        return $this;
    }

    /**
     * Get the value of valorServico
     */
    public function getValorServico(): Float
    {
        return $this->valorServico;
    }

    /**
     * Set the value of valorServico
     *
     * @return  self
     */
    public function setValorServico(Float $valorServico)
    {
        $this->valorServico = $valorServico;

        return $this;
    }

    /**
     * Get the value of fatorBonificacao
     */
    public function getFatorBonificacao(): Float
    {
        return $this->fatorBonificacao;
    }

    /**
     * Set the value of fatorBonificacao
     *
     * @return  self
     */
    public function setFatorBonificacao(Float $fatorBonificacao)
    {
        $this->fatorBonificacao = $fatorBonificacao;

        return $this;
    }

    /**
     * Get the value of precoCusto
     */
    public function getPrecoCusto(): Float
    {
        return $this->precoCusto;
    }

    /**
     * Set the value of precoCusto
     *
     * @return  self
     */
    public function setPrecoCusto(Float $precoCusto)
    {
        $this->precoCusto = $precoCusto;

        return $this;
    }

    /**
     * Get the value of precoCustoMedio
     */
    public function getPrecoCustoMedio(): Float
    {
        return $this->precoCustoMedio;
    }

    /**
     * Set the value of precoCustoMedio
     *
     * @return  self
     */
    public function setPrecoCustoMedio(Float $precoCustoMedio)
    {
        $this->precoCustoMedio = $precoCustoMedio;

        return $this;
    }

    /**
     * Get the value of precoCustoFiscal
     */
    public function getPrecoCustoFiscal(): Float
    {
        return $this->precoCustoFiscal;
    }

    /**
     * Set the value of precoCustoFiscal
     *
     * @return  self
     */
    public function setPrecoCustoFiscal(Float $precoCustoFiscal)
    {
        $this->precoCustoFiscal = $precoCustoFiscal;

        return $this;
    }

    /**
     * Get the value of valorDoDescontoMegaCaixa
     */
    public function getValorDoDescontoMegaCaixa(): Float
    {
        return $this->valorDoDescontoMegaCaixa;
    }

    /**
     * Set the value of valorDoDescontoMegaCaixa
     *
     * @return  self
     */
    public function setValorDoDescontoMegaCaixa(Float $valorDoDescontoMegaCaixa)
    {
        $this->valorDoDescontoMegaCaixa = $valorDoDescontoMegaCaixa;

        return $this;
    }

    /**
     * Get the value of participouPromocaoDesconto
     */
    public function getParticipouPromocaoDesconto(): Float
    {
        return $this->participouPromocaoDesconto;
    }

    /**
     * Set the value of participouPromocaoDesconto
     *
     * @return  self
     */
    public function setParticipouPromocaoDesconto(Float $participouPromocaoDesconto)
    {
        $this->participouPromocaoDesconto = $participouPromocaoDesconto;

        return $this;
    }

    /**
     * Get the value of tipoBonificacao
     */
    public function getTipoBonificacao(): Float
    {
        return $this->tipoBonificacao;
    }

    /**
     * Set the value of tipoBonificacao
     *
     * @return  self
     */
    public function setTipoBonificacao(Float $tipoBonificacao)
    {
        $this->tipoBonificacao = $tipoBonificacao;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): String
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo(String $tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of tipoPreco
     */
    public function getTipoPreco(): Int
    {
        return $this->tipoPreco;
    }

    /**
     * Set the value of tipoPreco
     *
     * @return  self
     */
    public function setTipoPreco(Int $tipoPreco)
    {
        $this->tipoPreco = $tipoPreco;

        return $this;
    }
}
