<?php

require_once './app/controlador/controlador.cliente.php';
//require_once './app/controlador/controlador.mascota.php';
//require_once 'app/ayudantes/ayudantes.autenticacion.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$accion = 'verClientes'; // => Accion que tenemos por defecto
if (!empty($_GET['accion'])) {
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
// Partimos la accion para separar la accion de cada parametro //
//************************************************************ */
$parametros = explode('/', $accion);

switch ($parametros[0]) { // revisar si va cero
    case 'verClientes':
        $controlador = new ControladorCliente();
        $controlador->verClientes();
        break;
    case 'agregarCliente':
        $controlador = new ControladorCliente();
        $controlador->agregarCliente();
        break;
    case 'eliminarCliente': //Eliminar por id
        $controlador = new ControladorCliente();
        // $id = $parametros[1];
        $controlador->eliminarCliente($parametros[1]);
        break;
    case 'modificarCliente':
        $controlador = new ControladorCliente();
        // $id = $parametros[1];
        $controlador->modificarCliente($parametros[1]);
        break;
    case 'mostrarCliente':
        $controlador = new ControladorCliente();
        $controlador->mostrarCliente($parametros[1]);
        /*
    case 'mostrarMascota':
        $controladorMascota = new ControladorMascota();
        $controladorMascota->vermascotas();
        break;   
    case 'agregarMascota':
        $controladorMascota = new ControladorMascota();
        $controladorMascota->agregarMascota();
        break;    
    case 'eliminarMascota':
        $controladorMascota = new ControladorMascota();
        $controladorMascota->eliminarMascota();
        break;    
    case 'modificarMascota':
        $controladorMascota = new ControladorMascota();
        $controladorMascota->modificarMascota();
        break;
        */
        /*case 'sobreApp':
        $controladorSobre = new ControladorSobreApp();
        $controladorSobre->verSobreApp();
        */
        /* 
    case 'acceso':
        $controladorAutenticacion = new ControladorAutenticacion();
        $controladorAutenticacion->verAcceso();
    case 'autenticacion':
        $controladorAutenticacion = new ControladorAutenticacion();
        $controladorAutenticacion->autenticacion();
    case 'salir':
        $controladorAutenticacion = new ControladorAutenticacion();
        $controladorAutenticacion = salir();*/
    default:
        // Este ejemplo ilustra el caso especial "HTTP/"
        // Alternativas mejores en cases de uso típicos incluyen:
        // 1. header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        //    (para sobreescribir el mensaje de estado HTTP para los clientes que todavía usan HTTP/1.0)
        // 2. http_response_code(404); (para usar el mensaje defecto)
        header("HTTP/1.0 404 Not Found");
        echo ('404 Page not foound');
        break;
}
