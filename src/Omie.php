<?php

namespace BeeDelivery\Omie;

use BeeDelivery\Omie\Categoria;
use BeeDelivery\Omie\Cliente;
use BeeDelivery\Omie\Conta;
use BeeDelivery\Omie\Departamento;
use BeeDelivery\Omie\OrdemServico;
use BeeDelivery\Omie\Movimento;
use BeeDelivery\Omie\Pagavel;
use BeeDelivery\Omie\Recebivel;

class Omie
{
    public function categoria($app_key, $app_secret)
    {
        return new Categoria($app_key, $app_secret);
    }

    public function cliente($app_key, $app_secret)
    {
        return new Cliente($app_key, $app_secret);
    }

    public function conta($app_key, $app_secret)
    {
        return new Conta($app_key, $app_secret);
    }

    public function departamento($app_key, $app_secret)
    {
        return new Departamento($app_key, $app_secret);
    }

    public function movimento($app_key, $app_secret)
    {
        return new Movimento($app_key, $app_secret);
    }

    public function ordemServico($app_key, $app_secret)
    {
        return new OrdemServico($app_key, $app_secret);
    }

    public function pagavel($app_key, $app_secret)
    {
        return new Pagavel($app_key, $app_secret);
    }

    public function recebivel($app_key, $app_secret)
    {
        return new Recebivel($app_key, $app_secret);
    }
}
