<?php

class ModeloMascota {

    private $db;

    function __construct()
    {
        //1- Abrir conexion 
        $this->db = new PDO('mysql:host=localhost;dbname=app_web_veterinaria;charset=UTF8', 'root', '');
    }
   
    function traerMascotas(){
        //2- Enviar consulta
        $consulta = $this->db->prepare('SELECT * FROM mascota');
        $consulta->execute();

        //3- Respuesta con fetchAll(xq son varias)
        $mascotas = $consulta->fetchall(PDO::FETCH_OBJ);

        return $mascotas;
    }
}