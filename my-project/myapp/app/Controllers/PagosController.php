<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\ReservaModel;
use App\Entities\Reserva;
use App\Models\BuscarEstacionamientosPartnersModel;
use App\Entities\EstacionamientosPartners;
use App\Models\PublicarEstacionamientoModel;
use App\Entities\Estacionamientos;
//
class PagosController extends Controller
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
  
    // Vamos a la vista ... pero con los datos!!!
    return view('reserva/pago');
}
}