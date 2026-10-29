<?php

namespace VarejoFacil\Models;

class Preco extends Entidade
{
    private $id;
    private $lojaId;
    private $produtoId;
    private $idExterno;
    
    // Preços, Ofertas e Quantidades Mínimas
    private $precoVenda1 = 0;
    private $precoOferta1 = 0;
    private $margemPreco1 = 0;
    private $dataUltimoReajustePreco1;

    private $precoVenda2 = 0;
    private $precoOferta2 = 0;
    private $margemPreco2 = 0;
    private $quantidadeMinimaPreco2 = 0;
    private $dataUltimoReajustePreco2;

    private $precoVenda3 = 0;
    private $precoOferta3 = 0;
    private $margemPreco3 = 0;
    private $quantidadeMinimaPreco3 = 0;
    private $dataUltimoReajustePreco3;

    // Custos
    private $precoMedioDeReposicao;
    private $precoFiscalDeReposicao;
    private $custoProduto;

    // Outras Configurações e Regras
    private $origem;
    private $permiteDesconto = false;
    private $descontoMaximo = 0;
    private $incentivoEmZonaFranca;

    function __construct(Int $id, Int $produtoId, Int $lojaId)
    {
        $this->id = $id;
        $this->produtoId = $produtoId;
        $this->lojaId = $lojaId;
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

    public function setIdExterno($idExterno)
    {
        $this->idExterno = $idExterno;
        return $this;
    }

    public function getIdExterno()
    {
        return $this->idExterno;
    }

    // ==========================================
    // BLOCO DE PREÇO 1
    // ==========================================
    public function setPrecoVenda1($precoVenda1)
    {
        $this->precoVenda1 = $precoVenda1;
        return $this;
    }

    public function getPrecoVenda1(): Float
    {
        return $this->precoVenda1;
    }

    public function setPrecoOferta1($precoOferta1)
    {
        $this->precoOferta1 = $precoOferta1;
        return $this;
    }

    public function getPrecoOferta1(): Float
    {
        return $this->precoOferta1;
    }

    public function setMargemPreco1($margemPreco1)
    {
        $this->margemPreco1 = $margemPreco1;
        return $this;
    }

    public function getMargemPreco1(): Float
    {
        return $this->margemPreco1;
    }

    public function setDataUltimoReajustePreco1($data)
    {
        $this->dataUltimoReajustePreco1 = $data;
        return $this;
    }

    public function getDataUltimoReajustePreco1()
    {
        return $this->dataUltimoReajustePreco1;
    }

    // ==========================================
    // BLOCO DE PREÇO 2
    // ==========================================
    public function setPrecoVenda2($precoVenda2)
    {
        $this->precoVenda2 = $precoVenda2;
        return $this;
    }

    public function getPrecoVenda2(): Float
    {
        return $this->precoVenda2;
    }

    public function setPrecoOferta2($precoOferta2)
    {
        $this->precoOferta2 = $precoOferta2;
        return $this;
    }

    public function getPrecoOferta2(): Float
    {
        return $this->precoOferta2;
    }

    public function setMargemPreco2($margemPreco2)
    {
        $this->margemPreco2 = $margemPreco2;
        return $this;
    }

    public function getMargemPreco2(): Float
    {
        return $this->margemPreco2;
    }

    public function setQuantidadeMinimaPreco2($quantidadeMinimaPreco2)
    {
        $this->quantidadeMinimaPreco2 = $quantidadeMinimaPreco2;
        return $this;
    }

    public function getQuantidadeMinimaPreco2(): ?Float
    {
        return $this->quantidadeMinimaPreco2;
    }

    public function setDataUltimoReajustePreco2($data)
    {
        $this->dataUltimoReajustePreco2 = $data;
        return $this;
    }

    public function getDataUltimoReajustePreco2()
    {
        return $this->dataUltimoReajustePreco2;
    }

    // ==========================================
    // BLOCO DE PREÇO 3
    // ==========================================
    public function setPrecoVenda3($precoVenda3)
    {
        $this->precoVenda3 = $precoVenda3;
        return $this;
    }

    public function getPrecoVenda3(): Float
    {
        return $this->precoVenda3;
    }

    public function setPrecoOferta3($precoOferta3)
    {
        $this->precoOferta3 = $precoOferta3;
        return $this;
    }

    public function getPrecoOferta3(): Float
    {
        return $this->precoOferta3;
    }

    public function setMargemPreco3($margemPreco3)
    {
        $this->margemPreco3 = $margemPreco3;
        return $this;
    }

    public function getMargemPreco3(): Float
    {
        return $this->margemPreco3;
    }

    public function setQuantidadeMinimaPreco3($quantidadeMinimaPreco3)
    {
        $this->quantidadeMinimaPreco3 = $quantidadeMinimaPreco3;
        return $this;
    }

    public function getQuantidadeMinimaPreco3(): ?Float
    {
        return $this->quantidadeMinimaPreco3;
    }

    public function setDataUltimoReajustePreco3($data)
    {
        $this->dataUltimoReajustePreco3 = $data;
        return $this;
    }

    public function getDataUltimoReajustePreco3()
    {
        return $this->dataUltimoReajustePreco3;
    }

    // ==========================================
    // CUSTOS
    // ==========================================
    public function setPrecoMedioDeReposicao($precoMedio)
    {
        $this->precoMedioDeReposicao = $precoMedio;
        return $this;
    }

    public function getPrecoMedioDeReposicao()
    {
        return $this->precoMedioDeReposicao;
    }

    public function setPrecoFiscalDeReposicao($precoFiscal)
    {
        $this->precoFiscalDeReposicao = $precoFiscal;
        return $this;
    }

    public function getPrecoFiscalDeReposicao()
    {
        return $this->precoFiscalDeReposicao;
    }

    public function setCustoProduto($custo)
    {
        $this->custoProduto = $custo;
        return $this;
    }

    public function getCustoProduto()
    {
        return $this->custoProduto;
    }

    // ==========================================
    // OUTROS CAMPOS
    // ==========================================
    public function setOrigem($origem)
    {
        $this->origem = $origem;
        return $this;
    }
    
    public function getOrigem()
    {
        return $this->origem;
    } 

    public function setPermiteDesconto(bool $permite)
    {
        $this->permiteDesconto = $permite;
        return $this;
    }

    public function getPermiteDesconto(): bool
    {
        return $this->permiteDesconto;
    }

    public function setDescontoMaximo($descontoMaximo)
    {
        $this->descontoMaximo = $descontoMaximo;
        return $this;
    }

    public function getDescontoMaximo(): Float
    {
        return $this->descontoMaximo;
    }

    public function setIncentivoEmZonaFranca($incentivo)
    {
        $this->incentivoEmZonaFranca = $incentivo;
        return $this;
    }

    public function getIncentivoEmZonaFranca()
    {
        return $this->incentivoEmZonaFranca;
    }
}