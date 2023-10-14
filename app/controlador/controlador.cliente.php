<?php

include_once 'app/modelo/modelo.cliente.php';
include_once 'app/vista/ver.clientes.php';

class ControladorCliente {

    private $modelo;
    private $vista;

    function __construct(){
        $this->modelo = new ModeloCliente();
        $this->vista = new verCliente();
        
    }
    /* Nos muestra una lista de los clientes */
    function verClientes(){
       
        //obtiene los clientes desde el modelo
        $clientes = $this->modelo->traerClientes();
      
        // Vista
        $this->vista->mostrarClientes($clientes);

    }

    function agregarCliente(){
        //recibo los datos del formulario        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];
        
        //Verificacion de datos obligatorios
        if(empty($nombre) || empty($apellido) || empty($telefono)){
            $this->vista->mostrarError('Faltan completar campos obligatorios!');
            die();
        }
        
        //Insertar los datos en la BBDD
        $id = $this->modelo->insertarCliente($nombre, $apellido, $telefono, $email, $direccion, $ciudad);

        //redireccion
        header("Location: ".BASE_URL);

    }

    function eliminarCliente($id){
        $this->modelo->removerCliente($id);

        header("Location: " . BASE_URL);
    }

}