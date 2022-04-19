<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

        
    public function formulario()
    {
        $msg= "hola";
        $name= $this->request->getPost("name");
        if (isset($name)) {
            $msg ="Hola $name, bienvenido";
        } 
      
    
        return view('formView',['msg' => $msg]);
    }

}

