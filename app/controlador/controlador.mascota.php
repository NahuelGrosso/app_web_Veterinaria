<?php
require_once 'app/modelo/modelo.mascota.php';
require_once 'app/vista/ver.mascota.php';

//require_once 'app/ayudantes/ayudantes.autenticacion.php';

class ControladorCliente
{

    private $modeloMascota;
    private $vistaMascota;

    function __construct()
    {

        //  AyudantesAutenticacion::autenticacion();

      
        $this->modeloMascota = new ModeloMascota();
        $this->vistaMascota = new VerMascotas();
    }

function verMascotas(){

$mascotas = $this->modeloMascota->traerMascotas();

$this->vistaMascota->mostrarMascotas($mascotas);
}
}
