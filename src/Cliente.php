<?php

namespace BeeDelivery\Omie\src;

use BeeDelivery\Omie\src\Connection;

class Cliente
{

    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
    * Recupera todos os clientes
    *
    * @see https://app.omie.com.br/api/v1/geral/clientes/#ListarClientes
     * @param Integer $pagina, $registros_por_pagina
     * @param String $apenas_importado, S/N
     * @return json
     */
    public function listar($pagina = 1, $registros_por_pagina = 50, $apenas_importado_api = "N")
    {
        return $this->http->post('/geral/clientes/', [

            "pagina"                => $pagina,
            "registros_por_pagina"  => $registros_por_pagina,
            "apenas_importado_api"  => $apenas_importado_api,

        ], 'ListarClientes');
    }


    /**
    * Consulta os dados de um cliente
    *
    * @see https://app.omie.com.br/api/v1/geral/clientes/#ConsultarCliente
    * @param String $idOmie
    * @param String $idInterno
    * @return json
    */
    public function consultar($idOmie = "", $idInterno = "")
    {
        return $this->http->post('/geral/clientes/', [

            "codigo_cliente_omie"       => $idOmie,
            "codigo_cliente_integracao" => $idInterno,

        ], 'ConsultarCliente');
    }

    /**
    * Exclui um cliente da base de dados.
    *
    * @see https://app.omie.com.br/api/v1/geral/clientes/#ExcluirCliente
    * @param String $idOmie
    * @param String $idInterno
    * @return json
    */
    public function excluir($idOmie = "", $idInterno = "")
    {
        return $this->http->post('/geral/clientes/', [

            "codigo_cliente_omie"       => $idOmie,
            "codigo_cliente_integracao" => $idInterno,

        ], 'ExcluirCliente');
    }


    /**
    * Altera os dados do cliente
    *
    * @see https://app.omie.com.br/api/v1/geral/clientes/#AlterarCliente
    * @param Array $cliente
    * @return json
    */
    public function alterar($cliente)
    {
        return $this->http->post(

            '/geral/clientes/',
            $cliente,
            'AlterarCliente'

        );
    }

    /**
    * Altera se existir ou inclui um cliente
    *
    * @see https://app.omie.com.br/api/v1/geral/clientes/#UpsertCliente
    * @param Array $cliente
    * @return json
    */
    public function upsert($cliente)
    {
        return $this->http->post(

            '/geral/clientes/',
            $cliente,
            'UpsertCliente'

        );
    }


    /**
    * Inclui o cliente no Omie
    *
    * @see https://app.omie.com.br/api/v1/geral/clientes/#IncluirCliente
    * @param Array $cliente
    * @return json
    */
    public function incluir($cliente)
    {
        return $this->http->post(

            '/geral/clientes/',
            $cliente,
            'IncluirCliente'

        );
    }
}
