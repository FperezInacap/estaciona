<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Estacionamientos extends Entity
{

    protected $datamap = [
        "ide" => "estacionamiento_id",
        "alias" => "alias_estacionamiento",
        "direst" => "direccion_estacionamiento",
        "pmedmin" => "precio_medio_minuto",
        "pmeddia" => "precio_medio_dia",
        "ciudad" => "ciudad",
    ];

    protected $casts   = [];
}
?>