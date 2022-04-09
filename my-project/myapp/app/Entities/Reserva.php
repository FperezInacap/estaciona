<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Reserva extends Entity
{

    protected $datamap = [
        "id" => "estacionamiento_id",
        "nombre" => "estacionamiento_codigo",
        "tarm" => "tarifa_minuto",
        "tard" => "tarifa_dia",
        "estado" => "estado",
        "alias" => "alias_estacionamiento",
    ];

    protected $casts   = [];
}
?>