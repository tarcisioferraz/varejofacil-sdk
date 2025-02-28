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

    public function list(String $filter = '', $limit = null, $pace = 500): Response
    {
        if ($filter) {
            $filter = '&q=' . $filter;
        }


        $resp = new Response(0, $pace, 0);

        $count = $pace;
        if (!is_null($limit) && $limit < $pace)
            $count = $limit;


        do {
            $resposta = $this->sdk->get($this->resource . '?start=' . $resp->getStart() . $filter . '&count=' . $count, []);

            $resp->setTotal($resposta->total)
                ->setCount($resposta->count)
                ->moveStart($resposta->count);

            if (isset($resposta->items)) {
                foreach ($resposta->items as $item) {

                    $notaFiscal = new NotaFiscal();

                    $notaFiscal->setId($item->id)
                        ->setLojaId($item->lojaId)
                        ->setFornecedorId($item->fornecedorId)
                        ->setDataEmissao($item->dataEmissao)
                        ->setNumeroNota($item->numeroNota)
                        ->setSerie($item->serie)
                        ->setChaveDaNfe($item->chaveDaNfe)
                        ->setTipoDeOperacao($item->tipoDeOperacao)
                        ->setTipoDeFrete($item->tipoDeFrete)
                        ->setCondicaoDePagamento($item->condicaoDePagamento)
                        ->setProcessoDeEmissao($item->processoDeEmissao)
                        ->setTipoDeDocumentoFiscal($item->tipoDeDocumentoFiscal)
                        ->setAtualizaCusto($item->atualizaCusto)
                        ->setAtualizaEstoque($item->atualizaEstoque)
                        ->setSituacao($item->situacao)
                        ->setObservacao($item->observacao)
                        ->setTipoDeGeracao($item->tipoDeGeracao)
                        ->setClassificacao($item->classificacao)
                        ->setBaseDeCalculoDoICMS($item->baseDeCalculoDoICMS)
                        ->setValordoICMS($item->valorDoICMS)
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

                    if (isset($item->localId))
                        $notaFiscal->setLocalId($item->localId);

                    if (isset($item->funcionarioEmissorId))
                        $notaFiscal->setFuncionarioEmissorId($item->funcionarioEmissorId);

                    if (isset($item->operacaoId))
                        $notaFiscal->setOperacaoId($item->operacaoId)
                            ->setDataOperacao($item->dataOperacao);

                    if (isset($item->cfopId))
                        $notaFiscal->setCfopId($item->cfopId);

                    if (isset($item->modalidade))
                        $notaFiscal->setModalidade($item->modalidade);

                    if (isset($item->geraFiscal))
                        $notaFiscal->setGeraFiscal($item->geraFiscal);

                    if (isset($item->compoeABC))
                        $notaFiscal->setCompoeABC($item->compoeABC);

                    if (isset($item->tipoDeGeracaoDeFinanceiro))
                        $notaFiscal->setTipoDeGeracaoDeFinanceiro($item->tipoDeGeracaoDeFinanceiro);


                    foreach ($item->itens as $itemNota) {
                        $itemCompra = new ItemCompra();


                        $itemCompra->setId($itemNota->id)
                            ->setProdutoId($itemNota->produtoId)
                            ->setSequencial($itemNota->sequencial)
                            ->setCompoeTotalDaNota($itemNota->compoeTotalDaNota)
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
                            ->setPercentualTributado($itemNota->percentualTributado)
                            ->setCustoReposicao($itemNota->custoReposicao)
                            ->setOutrasDespesasCompoeBaseDeCalculoIcms($itemNota->outrasDespesasCompoeBaseDeCalculoIcms)
                            ->setNcm($itemNota->ncm)
                            ->setCest($itemNota->cest)
                            ->setModalidadeDaBaseDeCalculo($itemNota->modalidadeDaBaseDeCalculo)
                            ->setPercentualICMSDeCompra($itemNota->percentualICMSDeCompra)
                            ->setValorDoICMS($itemNota->valorDoICMS)
                            ->setValorDoICMSNoSimples($itemNota->valorDoICMSNoSimples)
                            ->setBaseDeCalculoDoICMS($itemNota->baseDeCalculoDoICMS)
                            ->setBaseDeCalculoDoICMSComSubstituicaoTributaria($itemNota->baseDeCalculoDoICMSComSubstituicaoTributaria)
                            ->setAliquotaDoICMSComSubstituicaoTributaria($itemNota->aliquotaDoICMSComSubstituicaoTributaria)
                            ->setValorDoICMSComSubstituicaoTributaria($itemNota->valorDoICMSComSubstituicaoTributaria)
                            ->setPercentualDeReducaoDASubstituicaoTributaria($itemNota->percentualDeReducaoDASubstituicaoTributaria)
                            ->setAliquotaDoICMS($itemNota->aliquotaDoICMS)
                            ->setAliquotaDoICMSDeVenda($itemNota->aliquotaDoICMSDeVenda)
                            ->setAliquotaDoICMSAntecipado($itemNota->aliquotaDoICMSAntecipado)
                            ->setValorDoICMSAntecipado($itemNota->valorDoICMSAntecipado)
                            ->setAliquotaNoSimples($itemNota->aliquotaNoSimples)
                            ->setBaseDeCalculoDoFecopSubstituto($itemNota->baseDeCalculoDoFecopSubstituto)
                            ->setAliquotaDoFecopSubstituto($itemNota->aliquotaDoFecopSubstituto)
                            ->setValorDoFecopSubstituto($itemNota->valorDoFecopSubstituto)
                            ->setValorDoICMSDesonerado($itemNota->valorDoICMSDesonerado)
                            ->setPercentualDiferimento($itemNota->percentualDiferimento)
                            ->setValorICMSDiferimento($itemNota->valorICMSDiferimento);

                        if (isset($itemNota->baseDeCalculoDoIPI)) {
                            $itemCompra->setBaseDeCalculoDoIPI($itemNota->baseDeCalculoDoIPI)
                                ->setAliquotaDoIPI($itemNota->aliquotaDoIPI)
                                ->setTipoDeEntradaIPI($itemNota->tipoDeEntradaIPI)
                                ->setValorDoIPI($itemNota->valorDoIPI);
                        }

                        if (isset($itemNota->cfopId))
                            $itemCompra->setCfopId($itemNota->cfopId);

                        if (isset($itemNota->situacaoFiscalId))
                            $itemCompra->setSituacaoFiscalId($itemNota->situacaoFiscalId);

                        if (isset($itemNota->csosn))
                            $itemCompra->setCsosn($itemNota->csosn);

                        if (isset($itemNota->custoFiscal))
                            $itemCompra->setCustoFiscal($itemNota->custoFiscal);

                        if (isset($itemNota->cstDoPISId)) {
                            $itemCompra->setCstDoPISId($itemNota->cstDoPISId)
                                ->setBaseDeCalculoDoPIS($itemNota->baseDeCalculoDoPIS)
                                ->setAliquotaDoPIS($itemNota->aliquotaDoPIS)
                                ->setValorDoPIS($itemNota->valorDoPIS);
                        }

                        if (isset($itemNota->cstDoCOFINSId)) {
                            $itemCompra->setCstDoCOFINSId($itemNota->cstDoCOFINSId)
                                ->setBaseDeCalculoDoCOFINS($itemNota->baseDeCalculoDoCOFINS)
                                ->setAliquotaDoCOFINS($itemNota->aliquotaDoCOFINS)
                                ->setValorDoCOFINS($itemNota->valorDoCOFINS);
                        }

                        if (isset($itemNota->baseDeCalculoDoFecop)) {
                            $itemCompra->setBaseDeCalculoDoFecop($itemNota->baseDeCalculoDoFecop)
                                ->setAliquotaDoFecop($itemNota->aliquotaDoFecop)
                                ->setValorDoFecop($itemNota->valorDoFecop);
                        }

                        if (isset($itemNota->sequencialItemPedido))
                            $itemCompra->setSequencialItemPedido($itemNota->sequencialItemPedido);

                        if (isset($itemNota->unidadeDeMedida))
                            $itemCompra->setUnidadeDeMedida($itemNota->unidadeDeMedida);


                        $notaFiscal->addItem($itemCompra);
                    }

                    $resp->addItem($notaFiscal);
                }
            }

            $total = $resp->getTotal();
            if (!is_null($limit) && $total > $limit)
                $total = $limit;
        } while ($resp->getStart() < $total);

        return $resp;
    }
}
