<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);


// Ejemplo base

$routes->get('base-lista', 'NavegarBaseController::index');
$routes->get('base-ver', 'NavegarBaseController::ver');
$routes->get('base-editar', 'NavegarBaseController::editar01Formulario');
$routes->get('base-editar-continuar', 'NavegarBaseController::editar02Continuar');
$routes->get('base-eliminar', 'NavegarBaseController::eliminar');
$routes->post('base-elimnar-continuar', 'NavegarBaseController::eliminar02Continuar');

// CRUD
//
//
$routes->get('concierto-lista', 'ConciertoCrud::index');
//
$routes->get('concierto-ver/(:num)', 'ConciertoCrud::ver/$1');
//
$routes->get('concierto-agregar', 'ConciertoCrud::agregar01Formulario');
$routes->post('concierto-agregar-continuar', 'ConciertoCrud::agregar02Continuar');
//
$routes->add('concierto-editar/(:num)', 'ConciertoCrud::editar01Formulario/$1');
$routes->post('concierto-editar-continuar', 'ConciertoCrud::editar02Continuar');
//
$routes->get('concierto-eliminar/(:num)', 'ConciertoCrud::eliminar01Formulario/$1');
$routes->post('concierto-elimnar-continuar', 'ConciertoCrud::eliminar02Continuar');
//
$routes->add('concierto-cancelar', 'ConciertoCrud::cancelar');
//


// DEMO LOGIN
//
$routes->add('login', 'LoginLogOutController::index');
$routes->add('login-login', 'LoginLogOutController::login01Formulario');
$routes->add('login-login01Validar/(:num)', 'LoginLogOutController::login02Validar/$1');
$routes->add('login-logout', 'LoginLogOutController::logout');
//



/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('reserva-lista', 'ReservaController::index');
$routes->get('reserva-tarifaMinuto/(:num)', 'TarifaMinutoController::ver/$1');
$routes->get('reserva-tarifaHora', 'TarifaHoraController::index');