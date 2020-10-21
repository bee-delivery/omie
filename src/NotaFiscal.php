<?php


namespace BeeDelivery\Omie;


use BeeDelivery\Omie\src\Connection;

class NotaFiscal
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Consultar nota fiscal.
     *
     * @see https://app.omie.com.br/api/v1/produtos/nfconsultar/#ConsultarNotaFiscais
     * @return json
     */
    public function consultarNfe($nfe)
    {
        return $this->http->post('/produtos/nfconsultar/', $nfe, 'ConsultarNotaFiscais');
    }

    /**
     * Consultar nota fiscal de serviço.
     *
     * @see https://app.omie.com.br/api/v1/produtos/nfconsultar/#ConsultarNotaFiscais
     * @return json
     */
    public function listarNfse($nPagina = null, $nRegPorPagina = null)
    {
        return $this->http->post('/servicos/nfse/', [

            "nPagina" => $nPagina,
            "nRegPorPagina"  => $nRegPorPagina,

        ], 'ConsultarNotaFiscais');
    }

}