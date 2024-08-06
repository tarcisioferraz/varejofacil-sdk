<?php

namespace VarejoFacil\Services;

use \VarejoFacil\VarejoFacilSDK;
use \VarejoFacil\Models\CupomFiscal;
use \VarejoFacil\Response;
use \VarejoFacil\Exceptions\VarejoFacilSDKException;
use VarejoFacil\Models\ItemVenda;

class CupomFiscalService
{
    private $resource = '/v1/venda/cupons-fiscais';
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

                    $cupom = new CupomFiscal();

                    $cupom->setId($item->id);
                    $cupom->setIdentificadorId($item->identificadorId);
                    $cupom->setSequencial($item->sequencial);
                    $cupom->setNumeroCaixa($item->numeroCaixa);
                    $cupom->setData($item->data);
                    $cupom->setLojaId($item->lojaId);
                    $cupom->setFuncionarioId($item->funcionarioId);
                    $cupom->setValor($item->valor);
                    $cupom->setQtdItensCupom($item->qtdItensCupom);
                    $cupom->setQtdUnidadesCupom($item->qtdUnidadesCupom);

                    foreach ($item->itensVenda as $itemCupom) {
                        $itemVenda = new ItemVenda();

                        $itemVenda->SetId($itemCupom->id);
                        $itemVenda->SetProdutoId($itemCupom->produtoId);
                        $itemVenda->SetFuncionarioVendedorId($itemCupom->funcionarioVendedorId);
                        $itemVenda->SetQuantidadeVenda($itemCupom->quantidadeVenda);
                        $itemVenda->SetValorUnidade($itemCupom->valorUnidade);
                        $itemVenda->SetValorAcrescimo($itemCupom->valorAcrescimo);
                        $itemVenda->SetValorDesconto($itemCupom->valorDesconto);
                        $itemVenda->SetValorTotal($itemCupom->valorTotal);
                        $itemVenda->SetPrecoVenda($itemCupom->precoVenda);
                        $itemVenda->SetValorServico($itemCupom->valorServico);

                        if (isset($itemCupom->fatorBonificacao))
                            $itemVenda->SetFatorBonificacao($itemCupom->fatorBonificacao);

                        if (isset($itemCupom->precoCusto))
                            $itemVenda->SetPrecoCusto($itemCupom->precoCusto);

                        if (isset($itemCupom->precoCustoMedio))
                            $itemVenda->SetPrecoCustoMedio($itemCupom->precoCustoMedio);

                        if (isset($itemCupom->precoCustoFiscal))
                            $itemVenda->SetPrecoCustoFiscal($itemCupom->precoCustoFiscal);

                        $itemVenda->SetValorDoDescontoMegaCaixa($itemCupom->valorDoDescontoMegaCaixa);
                        $itemVenda->SetParticipouPromocaoDesconto($itemCupom->participouPromocaoDesconto);
                        $itemVenda->SetTipoBonificacao($itemCupom->tipoBonificacao);
                        $itemVenda->SetTipo($itemCupom->tipo);
                        $itemVenda->SetTipoPreco($itemCupom->tipoPreco);

                        $cupom->addItensVenda($itemVenda);
                    }

                    $resp->addItem($cupom);
                }
            }
        } while ($resp->getStart() < $resp->getTotal());

        return $resp;
    }

    public function get(Int $id): CupomFiscal
    {

        $item = $this->sdk->get($this->resource . '/' . $id, []);

        if (is_null($item)) {
            throw new VarejoFacilSDKException('Nenhum Cupom com código "' . $id . '" foi encontrado');
        }


        $cupom = new CupomFiscal();

        $cupom->setId($item->id);
        $cupom->setIdentificadorId($item->identificadorId);
        $cupom->setSequencial($item->sequencial);
        $cupom->setNumeroCaixa($item->numeroCaixa);
        $cupom->setData($item->data);
        $cupom->setLojaId($item->lojaId);
        $cupom->setFuncionarioId($item->funcionarioId);
        $cupom->setValor($item->valor);
        $cupom->setQtdItensCupom($item->qtdItensCupom);
        $cupom->setQtdUnidadesCupom($item->qtdUnidadesCupom);

        foreach ($item->itensVenda as $itemCupom) {
            $itemVenda = new ItemVenda();

            $itemVenda->SetId($itemCupom->Id);
            $itemVenda->SetProdutoId($itemCupom->produtoId);
            $itemVenda->SetFuncionarioVendedorId($itemCupom->funcionarioVendedorId);
            $itemVenda->SetQuantidadeVenda($itemCupom->quantidadeVenda);
            $itemVenda->SetValorUnidade($itemCupom->valorUnidade);
            $itemVenda->SetValorAcrescimo($itemCupom->valorAcrescimo);
            $itemVenda->SetValorDesconto($itemCupom->valorDesconto);
            $itemVenda->SetValorTotal($itemCupom->valorTotal);
            $itemVenda->SetPrecoVenda($itemCupom->precoVenda);
            $itemVenda->SetValorServico($itemCupom->valorServico);
            $itemVenda->SetFatorBonificacao($itemCupom->fatorBonificacao);
            $itemVenda->SetPrecoCusto($itemCupom->precoCusto);
            $itemVenda->SetPrecoCustoMedio($itemCupom->precoCustoMedio);
            $itemVenda->SetPrecoCustoFiscal($itemCupom->precoCustoFiscal);
            $itemVenda->SetValorDoDescontoMegaCaixa($itemCupom->valorDoDescontoMegaCaixa);
            $itemVenda->SetParticipouPromocaoDesconto($itemCupom->participouPromocaoDesconto);
            $itemVenda->SetTipoBonificacao($itemCupom->tipoBonificacao);
            $itemVenda->SetTipo($itemCupom->tipo);
            $itemVenda->SetTipoPreco($itemCupom->tipoPreco);

            $cupom->addItensVenda($itemVenda);
        }

        return $cupom;
    }
}
