<?php

namespace VarejoFacil\Services;

use VarejoFacil\Models\ItemCompra;
use VarejoFacil\Models\NotaFiscal;
use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Response;

class NotaFiscalCompraService
{
    private $resource = '/v1/compra/notas-fiscais';
    private $sdk;

    function __construct(VarejoFacilSDK $sdk)
    {
        $this->sdk = $sdk;
    }

    public function list(String $filter = '', $count = 500): Response
    {
        if ($filter) {
            $filter = '&q=' . $filter;
        }


        $resp = new Response(0, $count, 0);

        do {
            $resposta = $this->sdk->get($this->resource . '?start=' . $resp->getStart() . $filter . '&count=' . $resp->getCount(), []);
            $resp->setTotal($resposta->total)
                ->setCount($resposta->count)
                ->moveStart($resposta->count);

            if (isset($resposta->items)) {
                foreach ($resposta->items as $item) {

                    $notaFiscal = new NotaFiscal();

                    $notaFiscal->setId($item->id)
                        ->setLojaId($item->lojaId)
                        ->setLocalId($item->localId)
                        ->setOperacaoId($item->oeracaoId)
                        ->setFornecedorId($item->fornecedorId)
                        ->setDataEmissao($item->dataEmissao)
                        ->setDataOperacao($item->dataOperacao)
                        ->setDataAlteracao($item->dataAlteracao)
                        ->setNumeroNota($item->numeroNota)
                        ->setSerie($item->serie)
                        ->setChaveDaNfe($item->chaveDaNfe)
                        ->setFuncionarioEmissorId($item->funcionarioEmissorId)
                        ->setCfopId($item->cfopId)
                        ->setTipoDeOperacao($item->tipoDeOperacao)
                        ->setTipoDeFrete($item->tipoDeFrete)
                        ->setCondicaoDePagamento($item->condicaoDePagamento)
                        ->setProcessoDeEmissao($item->processoDeEmissao)
                        ->setTipoDeDocumentoFiscal($item->tipoDeDocumentoFiscal)
                        ->setModalidade($item->modalidade)
                        ->setAtualizaCusto($item->atualizaCusto)
                        ->setAtualizaEstoque($item->atualizaEstoque)
                        ->setGeraFiscal($item->geraFiscal)
                        ->setCompoeABC($item->compoeABC)
                        ->setSituacao($item->situacao)
                        ->setObservacao($item->observacao)
                        ->setTipoDeGeracao($item->tipoDeGeracao)
                        ->setClassificacao($item->classificacao)
                        ->setTipoDeGeracaoDeFinanceiro($item->tipoDeGeracaoDeFinanceiro)
                        ->setBaseDeCalculoDoICMS($item->baseDeCalculoDoICMS)
                        ->setValordoICMS($item->valordoICMS)
                        ->setBaseDeCalculoDoICMSSubstituicaoTributaria($item->baseDeCalculoDoICMSSubstituicaoTributaria)
                        ->setValorDoIPI($item->valorDoIPI)
                        ->setValorDoFrete($item->valorDoFrete)
                        ->setValorDeOutrasDespesas($item->valorDeOutrasDespesas)
                        ->setValorDoSeguro($item->valorDoSeguro)
                        ->setValorDoDesconto($item->valorDoDesconto)
                        ->setValorDoDAE($item->valorDoDAE)
                        ->setValorTotalDosItens($item->valorTotalDosItens)
                        ->setValorDoDocumento($item->valorDoDocumento)
                        ->setValorDoPIS($item->valorDoPIS)
                        ->setValorDoCOFINS($item->valorDoCOFINS)
                        ->setValorDoICMSDesonerado($item->valorDoICMSDesonerado)
                        ->setBaseDeCalculoFecop($item->baseDeCalculoFecop)
                        ->setValorFecop($item->valorFecop)
                        ->setBaseDeCalculoFecopSubstituicaoTributaria($item->baseDeCalculoFecopSubstituicaoTributaria)
                        ->setValorFecopSubstituicaoTributaria($item->valorFecopSubstituicaoTributaria);


                    foreach ($item->itens as $itemNota) {
                        $itemCompra = new ItemCompra();

                        $itemCompra->setId($itemNota->Id)
                            ->setProdutoId($itemNota->produtoId)
                            ->setSequencial($itemNota->sequencial)
                            ->setCompoeTotalDaNota($itemNota->compoeTotalDaNota)
                            ->setCfopId($itemNota->cfopId)
                            ->setUnidadeDeMedida($itemNota->unidadeDeMedida)
                            ->setQuantidadeDeItensNaUnidade($itemNota->quantidadeDeItensNaUnidade)
                            ->setQuantidade($itemNota->quantidade)
                            ->setQuantidadeCompleta($itemNota->quantidadeCompleta)
                            ->setValorDaEmbalagem($itemNota->valorDaEmbalagem)
                            ->setTipoDeEntradaDesconto($itemNota->tipoDeEntradaDesconto)
                            ->setValorDoDescontoNaoTributado($itemNota->valorDoDescontoNaoTributado)
                            ->setValorDoDescontoTributado($itemNota->valorDoDescontoTributado)
                            ->setTipoDeEntradaFrete($itemNota->tipoDeEntradaFrete)
                            ->setValorDoFrete($itemNota->valorDoFrete)
                            ->setTipoDeEntradaSeguro($itemNota->tipoDeEntradaSeguro)
                            ->setValorDoSeguro($itemNota->valorDoSeguro)
                            ->setTipoDeEntradaOutrasDespesas($itemNota->tipoDeEntradaOutrasDespesas)
                            ->setValorOutrasDespesas($itemNota->valorOutrasDespesas)
                            ->setValorDoDAE($itemNota->valorDoDAE)
                            ->setPercentualDoDAE($itemNota->percentualDoDAE)
                            ->setValorTotalDoItem($itemNota->valorTotalDoItem)
                            ->setSituacaoFiscalId($item->situacaoFiscalId)
                            ->setPercentualTributado($itemNota->percentualTributado)
                            ->setCsosn($itemNota->csosn)
                            ->setCustoReposicao($itemNota->custoReposicao)
                            ->setCustoFiscal($itemNota->custoFiscal)
                            ->setOutrasDespesasCompoeBaseDeCalculoIcms($itemNota->outrasDespesasCompoeBaseDeCalculoIcms)
                            ->setSequencialItemPedido($itemNota->sequencialItemPedido)
                            ->setNcm($itemNota->ncm)
                            ->setCest($itemNota->Cest)
                            ->setModalidadeDaBaseDeCalculo($itemNota->modalidadeDaBaseDeCalculo)
                            ->setPercentualICMSDeCompra($itemNota->percentualICMSDeCompra)
                            ->setValorDoICMS($itemNota->valorICMS)
                            ->setValorDoICMSNoSimples($itemNota->valorICMSNoSimples)
                            ->setBaseDeCalculoDoICMS($itemNota->baseDeCalculoDoICMS)
                            ->setBaseDeCalculoDoICMSComSubstituicaoTributaria($itemNota->baseDeCalculoDoICMSSubstituicaoTributaria)
                            ->setAliquotaDoICMSComSubstituicaoTributaria($itemNota->aliquotaDoICMSSubstituicaoTributaria)
                            ->setValorDoICMSComSubstituicaoTributaria($itemNota->valorDoICMSSubstituicaoTributaria)
                            ->setPercentualDeReducaoDASubstituicaoTributaria($itemNota->percentualDeReducaoDASubstituicaoTributaria)
                            ->setAliquotaDoICMS($itemNota->aliquotaDoICMS)
                            ->setAliquotaDoICMSDeVenda($itemNota->aliquotaDoICMSDeVenda)
                            ->setAliquotaDoICMSAntecipado($itemNota->aliquotaDoICMSAntecipado)
                            ->setValorDoICMSAntecipado($itemNota->valorDoICMSAntecipado)
                            ->setAliquotaNoSimples($itemNota->aliquotaNoSimples)
                            ->setBaseDeCalculoDoIPI($itemNota->baseDeCalculoDoIPI)
                            ->setAliquotaDoIPI($itemNota->aliquotaDoIPI)
                            ->setTipoDeEntradaIPI($itemNota->tipoDeEntradaIPI)
                            ->setValorDoIPI($itemNota->valorDoIPI)
                            ->setCstDoPISId($itemNota->cstDoPISId)
                            ->setBaseDeCalculoDoPIS($itemNota->baseDeCalculoDoPIS)
                            ->setAliquotaDoPIS($itemNota->aliquotaDoPIS)
                            ->setValorDoPIS($itemNota->valorDoPIS)
                            ->setCstDoCOFINSId($itemNota->cstDoCOFINSId)
                            ->setBaseDeCalculoDoCOFINS($itemNota->baseDeCalculoDoCOFINS)
                            ->setAliquotaDoCOFINS($itemNota->aliquotaDoCOFINS)
                            ->setValorDoCOFINS($itemNota->valorDoCOFINS)
                            ->setBaseDeCalculoDoFecop($itemNota->baseDeCalculoDoFecop)
                            ->setAliquotaDoFecop($itemNota->aliquotaDoFecop)
                            ->setValorDoFecop($itemNota->valorDoFecop)
                            ->setBaseDeCalculoDoFecopSubstituto($itemNota->baseDeCalculoDoFecopSubstituto)
                            ->setAliquotaDoFecopSubstituto($itemNota->aliquotaDoFecopSubstituto)
                            ->setValorDoFecopSubstituto($itemNota->valorDoFecopSubstituto)
                            ->setValorDoICMSDesonerado($itemNota->valorDoICMSDesonerado)
                            ->setPercentualDiferimento($itemNota->percentualDiferimento)
                            ->setValorICMSDiferimento($itemNota->valorICMSDiferimento);

                        $notaFiscal->addItem($itemCompra);
                    }

                    $resp->addItem($notaFiscal);
                }
            }
        } while ($resp->getStart() < $resp->getTotal());

        return $resp;
    }
}