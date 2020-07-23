<?php

namespace BeeDelivery\Omie;

use BeeDelivery\Omie\src\Cliente;
use BeeDelivery\Omie\src\Conta;
use BeeDelivery\Omie\src\Pagavel;
use BeeDelivery\Omie\src\Recebivel;
use BeeDelivery\Omie\src\Categoria;
use BeeDelivery\Omie\src\Departamento;

class Omie{	
    public function cliente($app_key, $app_secret){
        return new Cliente($app_key, $app_secret);
    }

    public function recebivel($app_key, $app_secret){
        return new Recebivel($app_key, $app_secret);
    }

    public function pagavel($app_key, $app_secret){
        return new Pagavel($app_key, $app_secret);
    }

    public function categoria($app_key, $app_secret){
        return new Categoria($app_key, $app_secret);
    }

    public function departamento($app_key, $app_secret){
        return new Departamento($app_key, $app_secret);
    }

    public function conta($app_key, $app_secret){
        return new Conta($app_key, $app_secret);
    }
}