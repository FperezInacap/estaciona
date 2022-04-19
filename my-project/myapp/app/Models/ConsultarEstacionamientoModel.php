<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\Reserva;
class ConsultarEstacionamientoModel extends Model
{
    protected $table = 'reservas';
    protected $primaryKey = 'estacionamiento_id';
    
    protected $allowedFields = ['estacionamiento_codigo','tarifa_minuto', 'tarifa_dia', 'estado','alias_estacionamiento'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\Reserva'; 

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
        return $this->orderBy('estacionamiento_codigo', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }

    public function soloConA(){
        $b = $this->builder();
        $b->where('estado','0'); // esto es concierto_nombre like '%A%'
        $b->orderBy('estacionamiento_codigo', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\Reserva');
    }
}