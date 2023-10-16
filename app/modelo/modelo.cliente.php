<?php

class ModeloCliente{

    private $db;

    function __construct(){
        //1- Abrir conexion 
        $this->db = new PDO('mysql:host=localhost;dbname=app_web_veterinaria;charset=UTF8', 'root', '');

    }
   

    function traerClientes(){//ver los clientes, traerlos       

        //2- Enviar consulta
        $consulta = $this->db->prepare('SELECT * FROM cliente');
        $consulta->execute();

        //3- Respuesta con fetchAll(xq son varias)
        $clientes = $consulta->fetchall(PDO::FETCH_OBJ);

        return $clientes;
    }

    function insertarCliente($nombre, $apellido, $telefono, $email, $direccion, $ciuadad){
       
        //2- Enviar consulta
        $consulta = $this->db->prepare('INSERT INTO cliente (Nombre, Apellido, Telefono, Email, Direccion, Ciudad) VALUES (?,?,?,?,?,?)');
        $consulta->execute([$nombre, $apellido, $telefono, $email, $direccion, $ciuadad]);

        //3- Obtengo y devuelvo ID=dni de la tarea nueva
        return $this->db->lastInsertId();        
    }

    function removerCliente($id){
       

        //2-Enviar consulta
        $consulta = $this->db->prepare('DELETE FROM cliente WHERE id = ?');
        $consulta->execute([$id]);
    }

    function traerCliente($id)
    { //ver los clientes, traerlos       

        //2- Enviar consulta
        $consulta = $this->db->prepare('SELECT * FROM cliente WHERE id = ?');
        $consulta->execute([$id]);
        //3- Respuesta con fetchAll(xq son varias)
        $cliente = $consulta->fetchall(PDO::FETCH_OBJ);

        return $cliente;
    }

    function modificarCliente($id, $nombre, $apellido, $telefono, $email, $direccion, $ciudad){
        //2- Enviar consulta
        $consulta = $this->db->prepare('UPDATE `cliente` SET `Nombre` = ?, `Apellido`= ?, `Telefono` = ?, `Email` = ?, `Direccion` = ?, `Ciudad`= ? WHERE `id`=?');
        $consulta->execute([$nombre, $apellido, $telefono, $email, $direccion, $ciudad, $id]);

        //3- Obtengo y devuelvo ID=dni de la tarea nueva
        return $this->db->lastInsertId();     

    }
}
