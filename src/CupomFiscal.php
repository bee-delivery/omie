<?php


namespace BeeDelivery\Omie;


use BeeDelivery\Omie\src\Connection;

class CupomFiscal
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
     * @param $cupomFiscal
     * @return array
     */
    public function upsert($cupomFiscal)
    {
        return $this->http->post('/produtos/cupomfiscalincluir/', $cupomFiscal, 'AlterarCupomFiscal');
    }

}