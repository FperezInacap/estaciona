<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Reserva extends Entity
{

    protected $datamap = [
        "id" => "estacionamientos_id",
        "nombre" => "estacionamiento_cod",
        "tarm" => "estacionamiento_tarifa_min",
        "tard" => "estacionamiento_tarifa_dia",
        "estado" => "estado",
        "est_partner" => "estacionamiento_partners_id",
        ];

    protected $casts   = [];
}
?>