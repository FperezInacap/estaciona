<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\BuscarEstacionamientosPartnersModel;
use App\Entities\EstacionamientosPartners;
//
class BuscarEstacionamientosPartnersController extends Controller
{
//public function index(){
    // Obtenemos la clase del Model que controla los conciertos
    //$mod = new ReservaModel();
    // Buscamos los conciertos
    //$reservas = $mod->todEs();
    // UN EJEMPLO PARA MASA ADELANTE
    //$conciertos = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    //$data['registros'] = $reservas;
    // Vamos a la vista ... pero con los datos!!!
   // return view('reserva/lista',$data);
//}
public function index(){
    //
    session_start();
    // Obtenemos la clase del Model que controla los conciertos
    return view('reserva/latitudLongitud');
}   
public function buscarConGeo(){    
    $mod = new BuscarEstacionamientosPartnersModel();
    // Buscamos los conciertos
    //$reservas = $mod->todEs();
    // UN EJEMPLO PARA MASA ADELANTE
    $reservas = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['registros'] = $reservas;

    //
    $q_latitud = $_POST['latitud'];
    $data['latitud'] = $q_latitud;

    //
    $q_longitud = $_POST['longitud'];
    $data['longitud'] = $q_longitud;
    //
    // Vamos a la vista ... pero con los datos!!!
    return view('reserva/buscarEstacionamientosPartners',$data);
}

public function volver(){
    session_start();
    return view('login/index'); 
}


private function recuperaReserva($unId){
    
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new BuscarEstacionamientosPartnersModel();
    // Buscamos el Concierto por la PK
    $reserva = $mod->find($unId);
    // Dejamos el concierto la 'data transiente'
    $laData['reserva'] = $reserva;
    return $laData;
}

public function ver($id){
    session_start();
        // 
    $data = $this->recuperaReserva($id);
    //Vamos a la vista
    return view('reserva/ver',$data);
}

public function agregar01Formulario(){
    return view('reserva/agregar01Formulario');
}

public function agregar02Continuar(){
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unaReserva = new BuscarEstacionamientoPartners();
    $unaReserva->nombre =  $this->request->getVar('concierto');
    $unaReserva->ubicacion =  $this->request->getVar('ubicacion');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new ConciertoModel();
    // MAndamos la Transacciòn ala Base de DAtos
    $mod->save($unConcierto);
    //
    return $this->index();
}

public function editar01Formulario($id){
    $data = $this->recuperaConcierto($id);
    //Vamos a la vista
    return view('concierto/editar01Formulario',$data);
}

public function editar02Continuar(){
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unConcierto = new Concierto();
    $unConcierto->id = $this->request->getVar('id');
    $unConcierto->nombre =  $this->request->getVar('concierto');
    $unConcierto->ubicacion =  $this->request->getVar('ubicacion');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new ConciertoModel();
    // Mandamos la Transacciòn ala Base de DAtos
    $mod->actualziar($unConcierto);
    // vuelve al inicio
   return $this->index();
}

public function eliminar01Formulario($id){
    $data = $this->recuperaConcierto($id);
    //Vamos a la vista
    return view('concierto/eliminar',$data);
}

public function eliminar02Continuar(){
     // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
     $unConcierto = new Concierto();
     $unConcierto->id = $this->request->getVar('id');
     // Obtenemos la clase del Model que controla los conciertos
     $mod = new ConciertoModel();
     // Mandamos la Transacciòn ala Base de DAtos
     $mod->eliminar($unConcierto);   
     //Home
     return $this->index();
 }

 public function cancelar(){
    return $this->index();
 }


}
