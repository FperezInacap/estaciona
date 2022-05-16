<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class EstacionamientosPartners extends Entity
{

    protected $datamap = [
        "ide" => "estacionamientos_partners_id",
        "alias" => "alias_estacionamiento",
        "direst" => "direccion_estacionamiento",
        "pmedmin" => "precio_medio_minuto",
        "pmeddia" => "precio_medio_dia",
        "ciudad" => "ciudad",
        "latitud" => "estacionamientos_p_latitud",
        "longitud" => "estacionamientos_p_longitud",
    ];

    protected $casts   = [];
}
?>