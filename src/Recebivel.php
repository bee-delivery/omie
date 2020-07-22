<?php

namespace BeeDelivery\Omie\src;

use BeeDelivery\Omie\src\Connection;

class Recebivel
{

    public $http;
    protected $recebivel;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Lista as contas a receber cadastradas.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ListarContasReceber
     * @param Integer $pagina, $registros_por_pagina
     * @param String $apenas_importado, S/N
     * @return json
     */
    public function listar($pagina = 1, $registros_por_pagina = 50, $apenas_importado_api = "N")
    {
        return $this->http->post('/financas/contareceber/', [

            "pagina"                => $pagina,
            "registros_por_pagina"  => $registros_por_pagina,
            "apenas_importado_api"  => $apenas_importado_api,

        ], 'ListarContasReceber');
    }


    /**
     * Consulta uma Conta a Receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ConsultarContaReceber
     * @param String $idOmie
     * @param String $idInterno
     * @return json
     */
    public function consultar($idOmie = "", $idInterno = "")
    {
        return $this->http->post('/financas/contareceber/', [

            "codigo_lancamento_omie"        => $idOmie,
            "codigo_lancamento_integracao"  => $idInterno,

        ], 'ConsultarContaReceber');
    }



    /**
     * Altera uma conta a receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#AlterarContaReceber
     * @param Array $recebivel
     * @return json
     */
    public function alterar($recebivel)
    {
        return $this->http->post(

            '/financas/contareceber/',
            $recebivel,
            'AlterarContaReceber'
        );
    }

    /**
     * Concilia um recebimento.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ConciliarRecebimento
     * @param String $idBaixa
     * @param String $idBaixaInterno
     * @return json
     */
    public function conciliar($idBaixa = "", $idBaixaInterno = "")
    {
        return $this->http->post(

            '/financas/contareceber/',
            [
                "codigo_baixa"              => $idBaixa,
                "codigo_baixa_integracao"   => $idBaixaInterno

            ],'ConciliarRecebimento');
    }

    /**
     * Desconcilia um recebimento.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#DesconciliarRecebimento
     * @param String $idBaixa
     * @param String $idBaixaInterno
     * @return json
     */
    public function desconciliar($idBaixa = "", $idBaixaInterno = "")
    {
        return $this->http->post(
            '/financas/contareceber/',
            [

                "codigo_baixa"              => $idBaixa,
                "codigo_baixa_integracao"   => $idBaixaInterno

            ],'DesconciliarRecebimento');
    }

    /**
     * Exclui uma conta a receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ExcluirContaReceber
     * @param String $idOmie
     * @param String $idInterno
     * @return json
     */
    public function excluir($idOmie = "", $idInterno = "")
    {
        return $this->http->post('/financas/contareceber/', [

            "chave_lancamento"              => $idOmie,
            "codigo_lancamento_integracao"  => $idInterno,

        ], 'ExcluirContaReceber');
    }

    /**
     * Lança um recebimento.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#LancarRecebimento
     * @param Array $recebimento
     * @return json
     */
    public function lancarRecebimento($recebimento)
    {
        return $this->http->post(

            '/financas/contareceber/',
            $recebimento,
            'LancarRecebimento'
        );
    }

    /**
     * Efetua o cancelamento de um recebimento de Contas a Receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#CancelarRecebimento
     * @param String $idOmie
     * @param String $idInterno
     * @return json
     */
    public function cancelarRecebimento($idOmie = "", $idInterno = "")
    {
        return $this->http->post('/financas/contareceber/', [

            "codigo_baixa"              => $idOmie,
            "codigo_baixa_integracao"   => $idInterno,

        ], 'CancelarRecebimento');
    }

    /**
     * Inclui uma conta a Receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#IncluirContaReceber
     * @param Array $recebivel
     * @return json
     */
    public function incluir($recebivel)
    {
        return $this->http->post(

            '/financas/contareceber/',
            $recebivel,
            'IncluirContaReceber'
        );
    }
}
