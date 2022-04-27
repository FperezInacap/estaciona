<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\UsuarioEstacionamientoModel;

class LoginLogOutController extends BaseController
{
    public function index(){
        // Pal Home
        return view('login/index');
    }

    public function index2(){
        // Pal Home
        return view('login/index2');
    }
    public function login01Formulario()
    {
        // Como Debe funcionar
        // ** Mosrar el formulario de Login

        // Por mientras
        // ** Lista de usaurios desde la BD
        $model = new UsuarioModel();
       $usuarios = $model->todos();
       $data['registros'] = $usuarios;
        return view('login/login01Formulario',$data);
    }

    public function login02Validar($pk)
    {
        // Como swbe funcioanr
        // ** Recueprar los datos 
        // ** Buscar el usr en la bd (existe?)
        // ** Valdiar que la passw del usr esta ok 
        // ==> Guardar en la sesion
        $unCorreo = $_POST["el_correo"];
        $unaClave = $_POST["la_clave"];

        // Por mientras
        // buscamos el usr por PK

        // Dejamos el USR en Session ()        
        // ** Buscamos el usuario
        $model = new UsuarioModel();
        $usuario = $model->usuarioPorCorreo($unCorreo,$unaClave);
        if (sizeof($usuario) ==1 ) {
            session_start();
            $_SESSION['USR']= $usuario[0];
         // **   $_SESSION['USR']= $clave[0];
            return $this->index();
    
        }
        else{
            $msg= "";
            if (isset($msg)) {
             $msg= "Correo electrónico y/o contraseña inválidos.";  
            }          
            
            return view('login/login01Formulario',['msg' => $msg]); 
            } 
        
        
        // Lo poenmos en sesion
        //session_start();
        //$_SESSION['USR']= $usuario;
        // Pal Home!!!
        //return $this->index();
    }

    public function logout(){
        // Sacamos el USR de la Session

        //Pal Home  
        return view('welcome_message');
    }
    public function login03Formulario()
    {
        // Como Debe funcionar
        // ** Mosrar el formulario de Login

        // Por mientras
        // ** Lista de usaurios desde la BD
        $model = new UsuarioEstacionamientoModel();
       $usuarios = $model->todos();
       $data['registros'] = $usuarios;
        return view('login/login02Formulario',$data);
    }

    public function login03Validar($pk)
    {
        // Como swbe funcioanr
        // ** Recueprar los datos 
        // ** Buscar el usr en la bd (existe?)
        // ** Valdiar que la passw del usr esta ok 
        // ==> Guardar en la sesion
        $unCorreo = $_POST["el_correo"];
        $unaClave = $_POST["la_clave"];

        // Por mientras
        // buscamos el usr por PK

        // Dejamos el USR en Session ()        
        // ** Buscamos el usuario
        $model = new UsuarioEstacionamientoModel();
        $usuario = $model->usuarioPorCorreo($unCorreo,$unaClave);
        if (sizeof($usuario) ==1 ) {
            session_start();
            $_SESSION['USR']= $usuario[0];
         // **   $_SESSION['USR']= $clave[0];
            return $this->index2();
    
        }
        else{
            $msg= "";
            if (isset($msg)) {
             $msg= "Correo electrónico y/o contraseña inválidos.";  
            }          
            
            return view('login/login02Formulario',['msg' => $msg]); 
            } 
        
        
        // Lo poenmos en sesion
        //session_start();
        //$_SESSION['USR']= $usuario;
        // Pal Home!!!
        //return $this->index();
    }


}
