<?php

require_once 'app/modelo/modelo.cliente.php';
require_once 'app/vista/ver.clientes.php';
require_once 'app/modelo/modelo.mascota.php';
require_once 'app/vista/ver.mascota.php';

//require_once 'app/ayudantes/ayudantes.autenticacion.php';

class ControladorCliente
{

    private $modelo;
    private $vista;
    private $modeloMascota;
    private $vistaMascota;

    function __construct()
    {

        //  AyudantesAutenticacion::autenticacion();

        $this->modelo = new ModeloCliente();
        $this->vista = new VerClientes();
        $this->modeloMascota = new ModeloMascota();
        $this->vistaMascota = new VerMascotas();
    }
    /* Nos muestra una lista de los clientes */
    function verClientes()
    {

        //obtiene los clientes desde el modelo
        $clientes = $this->modelo->traerClientes();

        // Vista
        $this->vista->mostrarClientes($clientes);
    }
   
    function agregarCliente()
    {
        //recibo los datos del formulario        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];

        //Verificacion de datos obligatorios
        if (empty($nombre) || empty($apellido) || empty($telefono)) {
            $this->vista->mostrarError('Faltan completar campos obligatorios!');
            return;
        }

        //Insertar los datos en la BBDD
        $id = $this->modelo->insertarCliente($nombre, $apellido, $telefono, $email, $direccion, $ciudad);
        if ($id) {
            header('Location: ' . BASE_URL); //redireccion
        } else {
            $this->vista->mostrarError("Error al insertar el Cliente!");
        }
    }

    function eliminarCliente($id)
    {
        $this->modelo->removerCliente($id);

        header('Location: ' . BASE_URL);
    }

    function modificarCliente($id)
    {
        $nombre = $_POST['nombre'];
        $apellido =  $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $ciudad  = $_POST['ciudad'];
        
        $this->modelo->modificarCliente($id, $nombre, $apellido, $telefono, $email, $direccion, $ciudad);
        
        header('Location: ' . BASE_URL);
    }

    function mostrarCliente($id)
    {
        //obtiene los cliente desde el modelo
        $id = $this->modelo->traerCliente($id);

        // Vista
        $this->vista->mostrarCliente($id);
    }
}
