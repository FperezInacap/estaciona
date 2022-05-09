<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\Estacionamientos;
class PublicarEstacionamientoModel extends Model
{
    protected $table = 'estacionamientos';
    protected $primaryKey = 'estacionamientos_id';
    
    protected $allowedFields = ['estacionamiento_cod','estacionamiento_tarifa_min', 'estacionamiento_tarifa_dia', 'estado','estacionamiento_partners_id'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\Estacionamientos'; 

    public function  eliminar(Concierto $unConcierto){
        $this->delete($unConcierto->id);
    }

    public function actualziar (Concierto $unConcierto){
        /*
        // Escribiendo la consulta via "keys"
        $sql_update = "update conciertos set concierto_nombre = :nombre:, concierto_ubicacion= :ubicacion: where concierto_id =:id:";
        $parametros = [
            'nombre' => $unConcierto->nombre,
            'ubicacion' => $unConcierto->ubicacion,
            'id' => $unConcierto->id
        ]
        ;
        if (! 
            $this->db->query(
                $sql_update,
                $parametros
            )
        ) {
            $error = $db->error(); 
            error_log($error);
        }
        
        */

        /*
        // Aplicando el SQL Builder
        $parametros = [
            'concierto_nombre' => $unConcierto->nombre,
            'concierto_ubicacion' => $unConcierto->ubicacion
        ]
        ;
        $this->where('concierto_id',$unConcierto->id)
            ->set($parametros)
            ->update();
        */  

        // Abusando del framework porque estamos actualziando por llave priamria
        $parametros = [
            'concierto_nombre' => $unConcierto->nombre,
            'concierto_ubicacion' => $unConcierto->ubicacion            
        ]
        ;

        $this->update($unConcierto->id,$parametros);
    }

    public function todEs(){
        return $this->orderBy('estacionamiento_cod', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }

    public function soloConA(){
        $b = $this->builder();
        $b->where('estado','0'); // esto es concierto_nombre like '%A%'
        $b->orderBy('estacionamiento_cod', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\Estacionamientos');
    }
}