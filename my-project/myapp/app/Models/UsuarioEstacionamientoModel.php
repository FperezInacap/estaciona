<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\UsaurioEstacionamientoEntity;
class UsuarioEstacionamientoModel extends Model
{
    protected $table = 'usuarios_estacionamientos';
    protected $primaryKey = 'usuario_estacionamiento_id';
    
    protected $allowedFields = ['usuario_estacionamiento_correo', 'usuario_estacionamiento_clave'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\UsuarioEstacionamientoEntity'; 

    public function  eliminar(UsuarioEntity $unUsuario){
        $this->delete($unUsuario->id);
    }

    public function actualziar (UsuarioEntity $unUsuario){
        $parametros = [
            'usuario_correo' => $unUsuario->correo,
            'usuario_clave' => $unUsuario->clave             
        ]
        ;

        $this->update($unUsuario->id,$parametros);
    }

    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
        return $this->findAll();
     }

    public function  unUsuario(Int $pk){
        $unUsuario = $this->find($pk);
        error_log(gettype($unUsuario));
        return $unUsuario;
    }

    public function usuarioPorCorreo($unCorreo,$unaClave){
        // Instancia de builder SQL
        $unBuilder = $this->builder();
        // Que el correo sea el valor que quiero
        $unBuilder->where('usuario_estacionamiento_correo',$unCorreo); //
        $unBuilder->where('usuario_estacionamiento_clave',$unaClave); 
        $consulta = $unBuilder->get();
        return $consulta->getCustomResultObject('App\Entities\UsuarioEstacionamientoEntity');
    }

}

