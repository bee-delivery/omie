<?php

namespace BeeDelivery\Omie;

use BeeDelivery\Omie\src\Cliente;
use BeeDelivery\Omie\src\Conta;
use BeeDelivery\Omie\src\Pagavel;
use BeeDelivery\Omie\src\Recebivel;
use BeeDelivery\Omie\src\Categoria;
use BeeDelivery\Omie\src\Departamento;

class Omie{	
    public function cliente(){
        return new Cliente();
    }

    public function recebivel(){
        return new Recebivel();
    }

    public function pagavel(){
        return new Pagavel();
    }

    public function categoria(){
        return new Categoria();
    }

    public function departamento(){
        return new Departamento();
    }

    public function conta(){
        return new Conta();
    }
}