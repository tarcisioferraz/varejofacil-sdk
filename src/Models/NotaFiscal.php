<?php

namespace VarejoFacil\Models;

class NotaFiscal extends Entidade
{

    private Int $id;
    private Int $lojaId;
    private Int $localId;
    private Int $operacaoId;
    private Int $fornecedorId;
    private String $dataEmissao;
    private String $dataOperacao;
    private String $dataAlteracao;
    private String $numeroNota;
    private String $serie;
    private String $chaveDaNfe;
    private Int $funcionarioEmissorId;
    private Int $cfopId;
    private String $tipoDeOperacao;
    private String $tipoDeFrete;
    private String $condicaoDePagamento;
    private String $processoDeEmissao;
    private String $tipoDeDocumentoFiscal;
    private String $modalidade;
    private bool $atualizaCusto;
    private bool $atualizaEstoque;
    private bool $geraFiscal;
    private bool $compoeABC;
    private String $situacao;
    private String $observacao;
    private String $tipoDeGeracao;
    private String $classificacao;
    private String $tipoDeGeracaoDeFinanceiro;
    private Float $baseDeCalculoDoICMS;
    private Float $valorDoICMS;
    private Float $baseDeCalculoDoICMSSubstituicaoTributaria;
    private Float $valorDoICMSSubstituicaoTributaria;
    private Float $valorDoIPI;
    private Float $valorDoFrete;
    private Float $valorDeOutrasDespesas;
    private Float $valorDoSeguro;
    private Float $valorDoDesconto;
    private Float $valorDoDAE;
    private Float $valorTotalDosItens;
    private Float $valorDoDocumento;
    private Float $valorDoPIS;
    private Float $valorDoCOFINS;
    private Float $valorDoICMSDesonerado;
    private Float $baseDeCalculoFecop;
    private Float $valorFecop;
    private Float $baseDeCalculoFecopSubstituicaoTributaria;
    private Float $valorFecopSubstituicaoTributaria;

    private array $itens = [];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): NotaFiscal
    {
        $this->id = $id;
        return $this;
    }

    public function getLojaId(): int
    {
        return $this->lojaId;
    }

    public function setLojaId(int $lojaId): NotaFiscal
    {
        $this->lojaId = $lojaId;
        return $this;
    }

    public function getLocalId(): int
    {
        return $this->localId;
    }

    public function setLocalId(int $localId): NotaFiscal
    {
        $this->localId = $localId;
        return $this;
    }

    public function getOperacaoId(): int
    {
        return $this->operacaoId;
    }

    public function setOperacaoId(int $operacaoId): NotaFiscal
    {
        $this->operacaoId = $operacaoId;
        return $this;
    }

    public function getFornecedorId(): int
    {
        return $this->fornecedorId;
    }

    public function setFornecedorId(int $fornecedorId): NotaFiscal
    {
        $this->fornecedorId = $fornecedorId;
        return $this;
    }

    public function getDataEmissao(): string
    {
        return $this->dataEmissao;
    }

    public function setDataEmissao(string $dataEmissao): NotaFiscal
    {
        $this->dataEmissao = $dataEmissao;
        return $this;
    }

    public function getDataOperacao(): string
    {
        return $this->dataOperacao;
    }

    public function setDataOperacao(string $dataOperacao): NotaFiscal
    {
        $this->dataOperacao = $dataOperacao;
        return $this;
    }

    public function getDataAlteracao(): string
    {
        return $this->dataAlteracao;
    }

    public function setDataAlteracao(string $dataAlteracao): NotaFiscal
    {
        $this->dataAlteracao = $dataAlteracao;
        return $this;
    }

    public function getNumeroNota(): string
    {
        return $this->numeroNota;
    }

    public function setNumeroNota(string $numeroNota): NotaFiscal
    {
        $this->numeroNota = $numeroNota;
        return $this;
    }

    public function getSerie(): string
    {
        return $this->serie;
    }

    public function setSerie(string $serie): NotaFiscal
    {
        $this->serie = $serie;
        return $this;
    }

    public function getChaveDaNfe(): string
    {
        return $this->chaveDaNfe;
    }

    public function setChaveDaNfe(string $chaveDaNfe): NotaFiscal
    {
        $this->chaveDaNfe = $chaveDaNfe;
        return $this;
    }

    public function getFuncionarioEmissorId(): int
    {
        return $this->funcionarioEmissorId;
    }

    public function setFuncionarioEmissorId(int $funcionarioEmissorId): NotaFiscal
    {
        $this->funcionarioEmissorId = $funcionarioEmissorId;
        return $this;
    }

    public function getCfopId(): int
    {
        return $this->cfopId;
    }

    public function setCfopId(int $cfopId): NotaFiscal
    {
        $this->cfopId = $cfopId;
        return $this;
    }

    public function getTipoDeOperacao(): string
    {
        return $this->tipoDeOperacao;
    }

    public function setTipoDeOperacao(string $tipoDeOperacao): NotaFiscal
    {
        $this->tipoDeOperacao = $tipoDeOperacao;
        return $this;
    }

    public function getTipoDeFrete(): string
    {
        return $this->tipoDeFrete;
    }

    public function setTipoDeFrete(string $tipoDeFrete): NotaFiscal
    {
        $this->tipoDeFrete = $tipoDeFrete;
        return $this;
    }

    public function getCondicaoDePagamento(): string
    {
        return $this->condicaoDePagamento;
    }

    public function setCondicaoDePagamento(string $condicaoDePagamento): NotaFiscal
    {
        $this->condicaoDePagamento = $condicaoDePagamento;
        return $this;
    }

    public function getProcessoDeEmissao(): string
    {
        return $this->processoDeEmissao;
    }

    public function setProcessoDeEmissao(string $processoDeEmissao): NotaFiscal
    {
        $this->processoDeEmissao = $processoDeEmissao;
        return $this;
    }

    public function getTipoDeDocumentoFiscal(): string
    {
        return $this->tipoDeDocumentoFiscal;
    }

    public function setTipoDeDocumentoFiscal(string $tipoDeDocumentoFiscal): NotaFiscal
    {
        $this->tipoDeDocumentoFiscal = $tipoDeDocumentoFiscal;
        return $this;
    }

    public function getModalidade(): string
    {
        return $this->modalidade;
    }

    public function setModalidade(string $modalidade): NotaFiscal
    {
        $this->modalidade = $modalidade;
        return $this;
    }

    public function isAtualizaCusto(): bool
    {
        return $this->atualizaCusto;
    }

    public function setAtualizaCusto(bool $atualizaCusto): NotaFiscal
    {
        $this->atualizaCusto = $atualizaCusto;
        return $this;
    }

    public function isAtualizaEstoque(): bool
    {
        return $this->atualizaEstoque;
    }

    public function setAtualizaEstoque(bool $atualizaEstoque): NotaFiscal
    {
        $this->atualizaEstoque = $atualizaEstoque;
        return $this;
    }

    public function isGeraFiscal(): bool
    {
        return $this->geraFiscal;
    }

    public function setGeraFiscal(bool $geraFiscal): NotaFiscal
    {
        $this->geraFiscal = $geraFiscal;
        return $this;
    }

    public function isCompoeABC(): bool
    {
        return $this->compoeABC;
    }

    public function setCompoeABC(bool $compoeABC): NotaFiscal
    {
        $this->compoeABC = $compoeABC;
        return $this;
    }

    public function getSituacao(): string
    {
        return $this->situacao;
    }

    public function setSituacao(string $situacao): NotaFiscal
    {
        $this->situacao = $situacao;
        return $this;
    }

    public function getObservacao(): string
    {
        return $this->observacao;
    }

    public function setObservacao(string $observacao): NotaFiscal
    {
        $this->observacao = $observacao;
        return $this;
    }

    public function getTipoDeGeracao(): string
    {
        return $this->tipoDeGeracao;
    }

    public function setTipoDeGeracao(string $tipoDeGeracao): NotaFiscal
    {
        $this->tipoDeGeracao = $tipoDeGeracao;
        return $this;
    }

    public function getClassificacao(): string
    {
        return $this->classificacao;
    }

    public function setClassificacao(string $classificacao): NotaFiscal
    {
        $this->classificacao = $classificacao;
        return $this;
    }

    public function getTipoDeGeracaoDeFinanceiro(): string
    {
        return $this->tipoDeGeracaoDeFinanceiro;
    }

    public function setTipoDeGeracaoDeFinanceiro(string $tipoDeGeracaoDeFinanceiro): NotaFiscal
    {
        $this->tipoDeGeracaoDeFinanceiro = $tipoDeGeracaoDeFinanceiro;
        return $this;
    }

    public function getBaseDeCalculoDoICMS(): float
    {
        return $this->baseDeCalculoDoICMS;
    }

    public function setBaseDeCalculoDoICMS(float $baseDeCalculoDoICMS): NotaFiscal
    {
        $this->baseDeCalculoDoICMS = $baseDeCalculoDoICMS;
        return $this;
    }

    public function getValorDoICMS(): float
    {
        return $this->valorDoICMS;
    }

    public function setValorDoICMS(float $valorDoICMS): NotaFiscal
    {
        $this->valorDoICMS = $valorDoICMS;
        return $this;
    }

    public function getBaseDeCalculoDoICMSSubstituicaoTributaria(): float
    {
        return $this->baseDeCalculoDoICMSSubstituicaoTributaria;
    }

    public function setBaseDeCalculoDoICMSSubstituicaoTributaria(float $baseDeCalculoDoICMSSubstituicaoTributaria): NotaFiscal
    {
        $this->baseDeCalculoDoICMSSubstituicaoTributaria = $baseDeCalculoDoICMSSubstituicaoTributaria;
        return $this;
    }

    public function getValorDoICMSSubstituicaoTributaria(): float
    {
        return $this->valorDoICMSSubstituicaoTributaria;
    }

    public function setValorDoICMSSubstituicaoTributaria(float $valorDoICMSSubstituicaoTributaria): NotaFiscal
    {
        $this->valorDoICMSSubstituicaoTributaria = $valorDoICMSSubstituicaoTributaria;
        return $this;
    }

    public function getValorDoIPI(): float
    {
        return $this->valorDoIPI;
    }

    public function setValorDoIPI(float $valorDoIPI): NotaFiscal
    {
        $this->valorDoIPI = $valorDoIPI;
        return $this;
    }

    public function getValorDoFrete(): float
    {
        return $this->valorDoFrete;
    }

    public function setValorDoFrete(float $valorDoFrete): NotaFiscal
    {
        $this->valorDoFrete = $valorDoFrete;
        return $this;
    }

    public function getValorDeOutrasDespesas(): float
    {
        return $this->valorDeOutrasDespesas;
    }

    public function setValorDeOutrasDespesas(float $valorDeOutrasDespesas): NotaFiscal
    {
        $this->valorDeOutrasDespesas = $valorDeOutrasDespesas;
        return $this;
    }

    public function getValorDoSeguro(): float
    {
        return $this->valorDoSeguro;
    }

    public function setValorDoSeguro(float $valorDoSeguro): NotaFiscal
    {
        $this->valorDoSeguro = $valorDoSeguro;
        return $this;
    }

    public function getValorDoDesconto(): float
    {
        return $this->valorDoDesconto;
    }

    public function setValorDoDesconto(float $valorDoDesconto): NotaFiscal
    {
        $this->valorDoDesconto = $valorDoDesconto;
        return $this;
    }

    public function getValorDoDAE(): float
    {
        return $this->valorDoDAE;
    }

    public function setValorDoDAE(float $valorDoDAE): NotaFiscal
    {
        $this->valorDoDAE = $valorDoDAE;
        return $this;
    }

    public function getValorTotalDosItens(): float
    {
        return $this->valorTotalDosItens;
    }

    public function setValorTotalDosItens(float $valorTotalDosItens): NotaFiscal
    {
        $this->valorTotalDosItens = $valorTotalDosItens;
        return $this;
    }

    public function getValorDoDocumento(): float
    {
        return $this->valorDoDocumento;
    }

    public function setValorDoDocumento(float $valorDoDocumento): NotaFiscal
    {
        $this->valorDoDocumento = $valorDoDocumento;
        return $this;
    }

    public function getValorDoPIS(): float
    {
        return $this->valorDoPIS;
    }

    public function setValorDoPIS(float $valorDoPIS): NotaFiscal
    {
        $this->valorDoPIS = $valorDoPIS;
        return $this;
    }

    public function getValorDoCOFINS(): float
    {
        return $this->valorDoCOFINS;
    }

    public function setValorDoCOFINS(float $valorDoCOFINS): NotaFiscal
    {
        $this->valorDoCOFINS = $valorDoCOFINS;
        return $this;
    }

    public function getValorDoICMSDesonerado(): float
    {
        return $this->valorDoICMSDesonerado;
    }

    public function setValorDoICMSDesonerado(float $valorDoICMSDesonerado): NotaFiscal
    {
        $this->valorDoICMSDesonerado = $valorDoICMSDesonerado;
        return $this;
    }

    public function getBaseDeCalculoFecop(): float
    {
        return $this->baseDeCalculoFecop;
    }

    public function setBaseDeCalculoFecop(float $baseDeCalculoFecop): NotaFiscal
    {
        $this->baseDeCalculoFecop = $baseDeCalculoFecop;
        return $this;
    }

    public function getValorFecop(): float
    {
        return $this->valorFecop;
    }

    public function setValorFecop(float $valorFecop): NotaFiscal
    {
        $this->valorFecop = $valorFecop;
        return $this;
    }

    public function getBaseDeCalculoFecopSubstituicaoTributaria(): float
    {
        return $this->baseDeCalculoFecopSubstituicaoTributaria;
    }

    public function setBaseDeCalculoFecopSubstituicaoTributaria(float $baseDeCalculoFecopSubstituicaoTributaria): NotaFiscal
    {
        $this->baseDeCalculoFecopSubstituicaoTributaria = $baseDeCalculoFecopSubstituicaoTributaria;
        return $this;
    }

    public function getValorFecopSubstituicaoTributaria(): float
    {
        return $this->valorFecopSubstituicaoTributaria;
    }

    public function setValorFecopSubstituicaoTributaria(float $valorFecopSubstituicaoTributaria): NotaFiscal
    {
        $this->valorFecopSubstituicaoTributaria = $valorFecopSubstituicaoTributaria;
        return $this;
    }

    /**
     * Get the value of itens
     */
    public function getItens(): array
    {
        return $this->itens;
    }

    public function addItem(ItemCompra $item): NotaFiscal
    {
        $this->itens[] = $item;
        return $this;
    }


}
