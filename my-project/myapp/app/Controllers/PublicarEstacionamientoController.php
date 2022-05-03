<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\PublicarEstacionamientoModel;
use App\Entities\Estacionamientos;
//
class PublicarEstacionamientoController extends Controller
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
    $mod = new PublicarEstacionamientoModel();
    // Buscamos los conciertos
    $reservas = $mod->todEs();
    // UN EJEMPLO PARA MASA ADELANTE
    //$reservas = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['registros'] = $reservas;
    // Vamos a la vista ... pero con los datos!!!
    return view('reserva/publicarEstacionamiento',$data);
}


private function recuperaReserva($unId){

    $this->request->getPost("cod_estacionamiento");
    
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new PublicarEstacionamientoModel();
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
    $unEstacionamientos = new Estacionamientos();
    $unEstacionamientos->nombre =  $this->request->getVar('codigo_estacionamiento');
    $unEstacionamientos->estado =  $this->request->getVar('estado');
    $unEstacionamientos->tard =  $this->request->getVar('tarifa_dia');
    $unEstacionamientos->tarm =  $this->request->getVar('tarifa_minuto');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new PublicarEstacionamientoModel();
    // MAndamos la Transacciòn ala Base de DAtos
    $mod->save($unEstacionamientos);
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