<?php

namespace VarejoFacil\Models;

class ItemCompra
{
    private Int $id;
    private Int $produtoId;
    private Int $sequencial;
    private bool $compoeTotalDaNota;
    private Int $cfopId;
    private String $unidadeDeMedida;
    private Float $quantidadeDeItensNaUnidade;
    private Float $quantidade;
    private Float $quantidadeCompleta;
    private Float $valorDaEmbalagem;
    private String $tipoDeEntradaDesconto;
    private Float $valorDoDescontoNaoTributado;
    private Float $valorDoDescontoTributado;
    private String $tipoDeEntradaFrete;
    private Float $valorDoFrete;
    private String $tipoDeEntradaSeguro;
    private Float $valorDoSeguro;
    private string $tipoDeEntradaOutrasDespesas;
    private Float $valorOutrasDespesas;
    private Float $valorDoDAE;
    private Float $percentualDoDAE;
    private Float $valorTotalDoItem;
    private Int $situacaoFiscalId;
    private Float $percentualTributado;
    private String $csosn;
    private Float $custoReposicao;
    private Float $custoFiscal;
    private bool $outrasDespesasCompoeBaseDeCalculoIcms;
    private String $sequencialItemPedido;
    private string $ncm;
    private String $cest;
    private string $modalidadeDaBaseDeCalculo;
    private Float $percentualICMSDeCompra;
    private Float $valorDoICMS;
    private Float $valorDoICMSNoSimples;
    private Float $baseDeCalculoDoICMS;
    private Float $baseDeCalculoDoICMSComSubstituicaoTributaria;
    private Float $aliquotaDoICMSComSubstituicaoTributaria;
    private Float $valorDoICMSComSubstituicaoTributaria;
    private Float $percentualDeReducaoDASubstituicaoTributaria;
    private Float $aliquotaDoICMS;
    private Float $aliquotaDoICMSDeVenda;
    private Float $aliquotaDoICMSAntecipado;
    private Float $valorDoICMSAntecipado;
    private Float $aliquotaNoSimples;
    private Float $baseDeCalculoDoIPI;
    private Float $aliquotaDoIPI;
    private String $tipoDeEntradaIPI;
    private Float $valorDoIPI;
    private Int $cstDoPISId;
    private Float $baseDeCalculoDoPIS;
    private Float $aliquotaDoPIS;
    private Float $valorDoPIS;
    private Int $cstDoCOFINSId;
    private Float $baseDeCalculoDoCOFINS;
    private Float $aliquotaDoCOFINS;
    private Float $valorDoCOFINS;
    private Float $baseDeCalculoDoFecop;
    private Float $aliquotaDoFecop;
    private Float $valorDoFecop;
    private Float $baseDeCalculoDoFecopSubstituto;
    private Float $aliquotaDoFecopSubstituto;
    private Float $valorDoFecopSubstituto;
    private Float $valorDoICMSDesonerado;
    private Float $percentualDiferimento;
    private Float $valorICMSDiferimento;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): ItemCompra
    {
        $this->id = $id;
        return $this;
    }

    public function getProdutoId(): int
    {
        return $this->produtoId;
    }

    public function setProdutoId(int $produtoId): ItemCompra
    {
        $this->produtoId = $produtoId;
        return $this;
    }

    public function getSequencial(): int
    {
        return $this->sequencial;
    }

    public function setSequencial(int $sequencial): ItemCompra
    {
        $this->sequencial = $sequencial;
        return $this;
    }

    public function isCompoeTotalDaNota(): bool
    {
        return $this->compoeTotalDaNota;
    }

    public function setCompoeTotalDaNota(bool $compoeTotalDaNota): ItemCompra
    {
        $this->compoeTotalDaNota = $compoeTotalDaNota;
        return $this;
    }

    public function getCfopId(): int
    {
        return $this->cfopId;
    }

    public function setCfopId(int $cfopId): ItemCompra
    {
        $this->cfopId = $cfopId;
        return $this;
    }

    public function getUnidadeDeMedida(): string
    {
        return $this->unidadeDeMedida;
    }

    public function setUnidadeDeMedida(string $unidadeDeMedida): ItemCompra
    {
        $this->unidadeDeMedida = $unidadeDeMedida;
        return $this;
    }

    public function getQuantidadeDeItensNaUnidade(): float
    {
        return $this->quantidadeDeItensNaUnidade;
    }

    public function setQuantidadeDeItensNaUnidade(float $quantidadeDeItensNaUnidade): ItemCompra
    {
        $this->quantidadeDeItensNaUnidade = $quantidadeDeItensNaUnidade;
        return $this;
    }

    public function getQuantidade(): float
    {
        return $this->quantidade;
    }

    public function setQuantidade(float $quantidade): ItemCompra
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getQuantidadeCompleta(): float
    {
        return $this->quantidadeCompleta;
    }

    public function setQuantidadeCompleta(float $quantidadeCompleta): ItemCompra
    {
        $this->quantidadeCompleta = $quantidadeCompleta;
        return $this;
    }

    public function getValorDaEmbalagem(): float
    {
        return $this->valorDaEmbalagem;
    }

    public function setValorDaEmbalagem(float $valorDaEmbalagem): ItemCompra
    {
        $this->valorDaEmbalagem = $valorDaEmbalagem;
        return $this;
    }

    public function getTipoDeEntradaDesconto(): string
    {
        return $this->tipoDeEntradaDesconto;
    }

    public function setTipoDeEntradaDesconto(string $tipoDeEntradaDesconto): ItemCompra
    {
        $this->tipoDeEntradaDesconto = $tipoDeEntradaDesconto;
        return $this;
    }

    public function getValorDoDescontoNaoTributado(): float
    {
        return $this->valorDoDescontoNaoTributado;
    }

    public function setValorDoDescontoNaoTributado(float $valorDoDescontoNaoTributado): ItemCompra
    {
        $this->valorDoDescontoNaoTributado = $valorDoDescontoNaoTributado;
        return $this;
    }

    public function getValorDoDescontoTributado(): float
    {
        return $this->valorDoDescontoTributado;
    }

    public function setValorDoDescontoTributado(float $valorDoDescontoTributado): ItemCompra
    {
        $this->valorDoDescontoTributado = $valorDoDescontoTributado;
        return $this;
    }

    public function getTipoDeEntradaFrete(): string
    {
        return $this->tipoDeEntradaFrete;
    }

    public function setTipoDeEntradaFrete(string $tipoDeEntradaFrete): ItemCompra
    {
        $this->tipoDeEntradaFrete = $tipoDeEntradaFrete;
        return $this;
    }

    public function getValorDoFrete(): float
    {
        return $this->valorDoFrete;
    }

    public function setValorDoFrete(float $valorDoFrete): ItemCompra
    {
        $this->valorDoFrete = $valorDoFrete;
        return $this;
    }

    public function getTipoDeEntradaSeguro(): string
    {
        return $this->tipoDeEntradaSeguro;
    }

    public function setTipoDeEntradaSeguro(string $tipoDeEntradaSeguro): ItemCompra
    {
        $this->tipoDeEntradaSeguro = $tipoDeEntradaSeguro;
        return $this;
    }

    public function getValorDoSeguro(): float
    {
        return $this->valorDoSeguro;
    }

    public function setValorDoSeguro(float $valorDoSeguro): ItemCompra
    {
        $this->valorDoSeguro = $valorDoSeguro;
        return $this;
    }

    public function getTipoDeEntradaOutrasDespesas(): string
    {
        return $this->tipoDeEntradaOutrasDespesas;
    }

    public function setTipoDeEntradaOutrasDespesas(string $tipoDeEntradaOutrasDespesas): ItemCompra
    {
        $this->tipoDeEntradaOutrasDespesas = $tipoDeEntradaOutrasDespesas;
        return $this;
    }

    public function getValorOutrasDespesas(): float
    {
        return $this->valorOutrasDespesas;
    }

    public function setValorOutrasDespesas(float $valorOutrasDespesas): ItemCompra
    {
        $this->valorOutrasDespesas = $valorOutrasDespesas;
        return $this;
    }

    public function getValorDoDAE(): float
    {
        return $this->valorDoDAE;
    }

    public function setValorDoDAE(float $valorDoDAE): ItemCompra
    {
        $this->valorDoDAE = $valorDoDAE;
        return $this;
    }

    public function getPercentualDoDAE(): float
    {
        return $this->percentualDoDAE;
    }

    public function setPercentualDoDAE(float $percentualDoDAE): ItemCompra
    {
        $this->percentualDoDAE = $percentualDoDAE;
        return $this;
    }

    public function getValorTotalDoItem(): float
    {
        return $this->valorTotalDoItem;
    }

    public function setValorTotalDoItem(float $valorTotalDoItem): ItemCompra
    {
        $this->valorTotalDoItem = $valorTotalDoItem;
        return $this;
    }

    public function getSituacaoFiscalId(): int
    {
        return $this->situacaoFiscalId;
    }

    public function setSituacaoFiscalId(int $situacaoFiscalId): ItemCompra
    {
        $this->situacaoFiscalId = $situacaoFiscalId;
        return $this;
    }

    public function getPercentualTributado(): float
    {
        return $this->percentualTributado;
    }

    public function setPercentualTributado(float $percentualTributado): ItemCompra
    {
        $this->percentualTributado = $percentualTributado;
        return $this;
    }

    public function getCsosn(): string
    {
        return $this->csosn;
    }

    public function setCsosn(string $csosn): ItemCompra
    {
        $this->csosn = $csosn;
        return $this;
    }

    public function getCustoReposicao(): float
    {
        return $this->custoReposicao;
    }

    public function setCustoReposicao(float $custoReposicao): ItemCompra
    {
        $this->custoReposicao = $custoReposicao;
        return $this;
    }

    public function getCustoFiscal(): float
    {
        return $this->custoFiscal;
    }

    public function setCustoFiscal(float $custoFiscal): ItemCompra
    {
        $this->custoFiscal = $custoFiscal;
        return $this;
    }

    public function isOutrasDespesasCompoeBaseDeCalculoIcms(): bool
    {
        return $this->outrasDespesasCompoeBaseDeCalculoIcms;
    }

    public function setOutrasDespesasCompoeBaseDeCalculoIcms(bool $outrasDespesasCompoeBaseDeCalculoIcms): ItemCompra
    {
        $this->outrasDespesasCompoeBaseDeCalculoIcms = $outrasDespesasCompoeBaseDeCalculoIcms;
        return $this;
    }

    public function getSequencialItemPedido(): string
    {
        return $this->sequencialItemPedido;
    }

    public function setSequencialItemPedido(string $sequencialItemPedido): ItemCompra
    {
        $this->sequencialItemPedido = $sequencialItemPedido;
        return $this;
    }

    public function getNcm(): string
    {
        return $this->ncm;
    }

    public function setNcm(string $ncm): ItemCompra
    {
        $this->ncm = $ncm;
        return $this;
    }

    public function getCest(): string
    {
        return $this->cest;
    }

    public function setCest(string $cest): ItemCompra
    {
        $this->cest = $cest;
        return $this;
    }

    public function getModalidadeDaBaseDeCalculo(): string
    {
        return $this->modalidadeDaBaseDeCalculo;
    }

    public function setModalidadeDaBaseDeCalculo(string $modalidadeDaBaseDeCalculo): ItemCompra
    {
        $this->modalidadeDaBaseDeCalculo = $modalidadeDaBaseDeCalculo;
        return $this;
    }

    public function getPercentualICMSDeCompra(): float
    {
        return $this->percentualICMSDeCompra;
    }

    public function setPercentualICMSDeCompra(float $percentualICMSDeCompra): ItemCompra
    {
        $this->percentualICMSDeCompra = $percentualICMSDeCompra;
        return $this;
    }

    public function getValorDoICMS(): float
    {
        return $this->valorDoICMS;
    }

    public function setValorDoICMS(float $valorDoICMS): ItemCompra
    {
        $this->valorDoICMS = $valorDoICMS;
        return $this;
    }

    public function getValorDoICMSNoSimples(): float
    {
        return $this->valorDoICMSNoSimples;
    }

    public function setValorDoICMSNoSimples(float $valorDoICMSNoSimples): ItemCompra
    {
        $this->valorDoICMSNoSimples = $valorDoICMSNoSimples;
        return $this;
    }

    public function getBaseDeCalculoDoICMS(): float
    {
        return $this->baseDeCalculoDoICMS;
    }

    public function setBaseDeCalculoDoICMS(float $baseDeCalculoDoICMS): ItemCompra
    {
        $this->baseDeCalculoDoICMS = $baseDeCalculoDoICMS;
        return $this;
    }

    public function getBaseDeCalculoDoICMSComSubstituicaoTributaria(): float
    {
        return $this->baseDeCalculoDoICMSComSubstituicaoTributaria;
    }

    public function setBaseDeCalculoDoICMSComSubstituicaoTributaria(float $baseDeCalculoDoICMSComSubstituicaoTributaria): ItemCompra
    {
        $this->baseDeCalculoDoICMSComSubstituicaoTributaria = $baseDeCalculoDoICMSComSubstituicaoTributaria;
        return $this;
    }

    public function getAliquotaDoICMSComSubstituicaoTributaria(): float
    {
        return $this->aliquotaDoICMSComSubstituicaoTributaria;
    }

    public function setAliquotaDoICMSComSubstituicaoTributaria(float $aliquotaDoICMSComSubstituicaoTributaria): ItemCompra
    {
        $this->aliquotaDoICMSComSubstituicaoTributaria = $aliquotaDoICMSComSubstituicaoTributaria;
        return $this;
    }

    public function getValorDoICMSComSubstituicaoTributaria(): float
    {
        return $this->valorDoICMSComSubstituicaoTributaria;
    }

    public function setValorDoICMSComSubstituicaoTributaria(float $valorDoICMSComSubstituicaoTributaria): ItemCompra
    {
        $this->valorDoICMSComSubstituicaoTributaria = $valorDoICMSComSubstituicaoTributaria;
        return $this;
    }

    public function getPercentualDeReducaoDASubstituicaoTributaria(): float
    {
        return $this->percentualDeReducaoDASubstituicaoTributaria;
    }

    public function setPercentualDeReducaoDASubstituicaoTributaria(float $percentualDeReducaoDASubstituicaoTributaria): ItemCompra
    {
        $this->percentualDeReducaoDASubstituicaoTributaria = $percentualDeReducaoDASubstituicaoTributaria;
        return $this;
    }

    public function getAliquotaDoICMS(): float
    {
        return $this->aliquotaDoICMS;
    }

    public function setAliquotaDoICMS(float $aliquotaDoICMS): ItemCompra
    {
        $this->aliquotaDoICMS = $aliquotaDoICMS;
        return $this;
    }

    public function getAliquotaDoICMSDeVenda(): float
    {
        return $this->aliquotaDoICMSDeVenda;
    }

    public function setAliquotaDoICMSDeVenda(float $aliquotaDoICMSDeVenda): ItemCompra
    {
        $this->aliquotaDoICMSDeVenda = $aliquotaDoICMSDeVenda;
        return $this;
    }

    public function getAliquotaDoICMSAntecipado(): float
    {
        return $this->aliquotaDoICMSAntecipado;
    }

    public function setAliquotaDoICMSAntecipado(float $aliquotaDoICMSAntecipado): ItemCompra
    {
        $this->aliquotaDoICMSAntecipado = $aliquotaDoICMSAntecipado;
        return $this;
    }

    public function getValorDoICMSAntecipado(): float
    {
        return $this->valorDoICMSAntecipado;
    }

    public function setValorDoICMSAntecipado(float $valorDoICMSAntecipado): ItemCompra
    {
        $this->valorDoICMSAntecipado = $valorDoICMSAntecipado;
        return $this;
    }

    public function getAliquotaNoSimples(): float
    {
        return $this->aliquotaNoSimples;
    }

    public function setAliquotaNoSimples(float $aliquotaNoSimples): ItemCompra
    {
        $this->aliquotaNoSimples = $aliquotaNoSimples;
        return $this;
    }

    public function getBaseDeCalculoDoIPI(): float
    {
        return $this->baseDeCalculoDoIPI;
    }

    public function setBaseDeCalculoDoIPI(float $baseDeCalculoDoIPI): ItemCompra
    {
        $this->baseDeCalculoDoIPI = $baseDeCalculoDoIPI;
        return $this;
    }

    public function getAliquotaDoIPI(): float
    {
        return $this->aliquotaDoIPI;
    }

    public function setAliquotaDoIPI(float $aliquotaDoIPI): ItemCompra
    {
        $this->aliquotaDoIPI = $aliquotaDoIPI;
        return $this;
    }

    public function getTipoDeEntradaIPI(): string
    {
        return $this->tipoDeEntradaIPI;
    }

    public function setTipoDeEntradaIPI(string $tipoDeEntradaIPI): ItemCompra
    {
        $this->tipoDeEntradaIPI = $tipoDeEntradaIPI;
        return $this;
    }

    public function getValorDoIPI(): float
    {
        return $this->valorDoIPI;
    }

    public function setValorDoIPI(float $valorDoIPI): ItemCompra
    {
        $this->valorDoIPI = $valorDoIPI;
        return $this;
    }

    public function getCstDoPISId(): int
    {
        return $this->cstDoPISId;
    }

    public function setCstDoPISId(int $cstDoPISId): ItemCompra
    {
        $this->cstDoPISId = $cstDoPISId;
        return $this;
    }

    public function getBaseDeCalculoDoPIS(): float
    {
        return $this->baseDeCalculoDoPIS;
    }

    public function setBaseDeCalculoDoPIS(float $baseDeCalculoDoPIS): ItemCompra
    {
        $this->baseDeCalculoDoPIS = $baseDeCalculoDoPIS;
        return $this;
    }

    public function getAliquotaDoPIS(): float
    {
        return $this->aliquotaDoPIS;
    }

    public function setAliquotaDoPIS(float $aliquotaDoPIS): ItemCompra
    {
        $this->aliquotaDoPIS = $aliquotaDoPIS;
        return $this;
    }

    public function getValorDoPIS(): float
    {
        return $this->valorDoPIS;
    }

    public function setValorDoPIS(float $valorDoPIS): ItemCompra
    {
        $this->valorDoPIS = $valorDoPIS;
        return $this;
    }

    public function getCstDoCOFINSId(): int
    {
        return $this->cstDoCOFINSId;
    }

    public function setCstDoCOFINSId(int $cstDoCOFINSId): ItemCompra
    {
        $this->cstDoCOFINSId = $cstDoCOFINSId;
        return $this;
    }

    public function getBaseDeCalculoDoCOFINS(): float
    {
        return $this->baseDeCalculoDoCOFINS;
    }

    public function setBaseDeCalculoDoCOFINS(float $baseDeCalculoDoCOFINS): ItemCompra
    {
        $this->baseDeCalculoDoCOFINS = $baseDeCalculoDoCOFINS;
        return $this;
    }

    public function getAliquotaDoCOFINS(): float
    {
        return $this->aliquotaDoCOFINS;
    }

    public function setAliquotaDoCOFINS(float $aliquotaDoCOFINS): ItemCompra
    {
        $this->aliquotaDoCOFINS = $aliquotaDoCOFINS;
        return $this;
    }

    public function getValorDoCOFINS(): float
    {
        return $this->valorDoCOFINS;
    }

    public function setValorDoCOFINS(float $valorDoCOFINS): ItemCompra
    {
        $this->valorDoCOFINS = $valorDoCOFINS;
        return $this;
    }

    public function getBaseDeCalculoDoFecop(): float
    {
        return $this->baseDeCalculoDoFecop;
    }

    public function setBaseDeCalculoDoFecop(float $baseDeCalculoDoFecop): ItemCompra
    {
        $this->baseDeCalculoDoFecop = $baseDeCalculoDoFecop;
        return $this;
    }

    public function getAliquotaDoFecop(): float
    {
        return $this->aliquotaDoFecop;
    }

    public function setAliquotaDoFecop(float $aliquotaDoFecop): ItemCompra
    {
        $this->aliquotaDoFecop = $aliquotaDoFecop;
        return $this;
    }

    public function getValorDoFecop(): float
    {
        return $this->valorDoFecop;
    }

    public function setValorDoFecop(float $valorDoFecop): ItemCompra
    {
        $this->valorDoFecop = $valorDoFecop;
        return $this;
    }

    public function getBaseDeCalculoDoFecopSubstituto(): float
    {
        return $this->baseDeCalculoDoFecopSubstituto;
    }

    public function setBaseDeCalculoDoFecopSubstituto(float $baseDeCalculoDoFecopSubstituto): ItemCompra
    {
        $this->baseDeCalculoDoFecopSubstituto = $baseDeCalculoDoFecopSubstituto;
        return $this;
    }

    public function getAliquotaDoFecopSubstituto(): float
    {
        return $this->aliquotaDoFecopSubstituto;
    }

    public function setAliquotaDoFecopSubstituto(float $aliquotaDoFecopSubstituto): ItemCompra
    {
        $this->aliquotaDoFecopSubstituto = $aliquotaDoFecopSubstituto;
        return $this;
    }

    public function getValorDoFecopSubstituto(): float
    {
        return $this->valorDoFecopSubstituto;
    }

    public function setValorDoFecopSubstituto(float $valorDoFecopSubstituto): ItemCompra
    {
        $this->valorDoFecopSubstituto = $valorDoFecopSubstituto;
        return $this;
    }

    public function getValorDoICMSDesonerado(): float
    {
        return $this->valorDoICMSDesonerado;
    }

    public function setValorDoICMSDesonerado(float $valorDoICMSDesonerado): ItemCompra
    {
        $this->valorDoICMSDesonerado = $valorDoICMSDesonerado;
        return $this;
    }

    public function getPercentualDiferimento(): float
    {
        return $this->percentualDiferimento;
    }

    public function setPercentualDiferimento(float $percentualDiferimento): ItemCompra
    {
        $this->percentualDiferimento = $percentualDiferimento;
        return $this;
    }

    public function getValorICMSDiferimento(): float
    {
        return $this->valorICMSDiferimento;
    }

    public function setValorICMSDiferimento(float $valorICMSDiferimento): ItemCompra
    {
        $this->valorICMSDiferimento = $valorICMSDiferimento;
        return $this;
    }

    
}