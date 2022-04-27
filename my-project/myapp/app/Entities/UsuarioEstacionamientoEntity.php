<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UsuarioEstacionamientoEntity extends Entity
{
    protected $datamap = [
        "id" => "usuario_estacionamiento_id",
        "nombre" => "usuario_estacionamiento_nombre_completo",
        "correo" => "usuario_estacionamiento_correo",
        "clave" => "usuario_estacionamiento_clave",
    ];

    protected $casts   = [];
}
?>