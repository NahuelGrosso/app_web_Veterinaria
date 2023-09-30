<?php

require_once '.app/controlador/controlador.cliente.php';
require_once '.app/controlador/controlador.mascota.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$accion = 'mostrarClientes'; // => Accion que tenemos por defecto
if(!empty($_GET['accion'])){
    $accion = $_GET['accion'];
}


// Mostrar clientes      -> controladorCliente -> verClientes();
// Mostrar Mascotas      -> controladorMascota -> verMascotas();

// Agregar cliente       -> controladorCliente -> agregarCliente();
// Agregar Mascota       -> controladorMascota -> agregarMascota();

// Elimnar Cliente       -> controladorCliente -> eliminarCliente();
// Eliminar Mascota      -> controladorMascota -> eliminarMascota();

// Modificar Cliente     -> controladorCliente -> modificarCliente();
// Modificar Mascota     -> controladorMascota -> modificarMascota();
// Sobre la App          -> controladorSobre   -> ControladorSobreApp();


//************************************************************ */
// Partimos la accion para separar la accion de cada parametro
//************************************************************ */
$parametros = explode('/', $accion);

switch($parametros[]){
    case 'mostrarClientes':
        $controladorCliente = new ControladorCliente();
        $controladorCliente->verClientes();
        break;
    case 'mostrarMascota':
        $controladorMascota = new ControladorMascota();
        $controladorMascota->vermascotas();
        break;
    case 'agregarCliente':
        $controladorCliente = new ControladorCliente();
        $controladorCliente->agregarCliente();
        break;
    case 'agregarMascota':
        $controladorMascota = new ControladorMascota();
        $controladorMascota->agregarMascota();
        break;
    case 'eliminarCliente':
        $controladorCliente = new ControladorCliente();
        $controladorCliente->eliminarCliente();
        break;
    case 'eliminarMascota':
        $controladorMascota = new ControladorMascota();
        $controladorMascota->eliminarMascota();
        break;

    case 'modificarCliente':
        $controladorCliente = new ControladorCliente();
        $controladorCliente->modificarCliente();
        break;
    case 'modificarMascota':
        $controladorMascota = new ControladorMascota();
        $controladorMascota->modificarMascota();
        break;
    case 'sobreApp':
        $controladorSobre = new ControladorSobreApp();
        $controladorSobre->verSobreApp();
}