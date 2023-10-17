<?php
require_once 'app/vista/vista.autenticacion.php';


class ControladorAutenticacion {

    private $vista;
    private $modelo;

    function __construct(){
       $this->vista;
        $this->modelo;
    }
  
    public function verLogin(){
        $this->vista->verLogin();

    }

    public function autenticacion(){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

    if (empty($usuario) || empty($contraseña)) {
        echo('Faltan completar datos');
        return;
    }


    }
}