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
// Modificar Mascota     -> ControladorMascota -> modificarMascota();


//************************************************************ */
// Partimos la accion para separar la accion de cada parametro
//************************************************************ */
$parametros = explode('/', $accion);

switch($parametros[]){
    case 'mostrarClientes':
        $controladorCliente = new ControladorCliente();
        $controladorCliente->verClientes();
        break;
}