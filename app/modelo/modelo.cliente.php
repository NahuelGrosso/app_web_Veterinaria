<?php

class ModeloCliente{

    private function connect(){
        $db = new PDO('mysql:host=localhost;dbname=app_web_veterinaria;charset=UTF8', 'root', '');
        return $db;
    }

    function traerClientes(){//ver los clientes, traerlos
        //1- Abrir conexion 
        $db = $this->connect();

        //2- Enviar consulta
        $consulta = $db->prepare('SELECT * FROM cliente');
        $consulta->execute();

        //3- Respuesta con fetchAll(xq son varias)
        $clientes = $consulta->fetchall(PDO::FETCH_OBJ);

        return $clientes;
    }

    function insertarCliente($nombre, $apellido, $telefono, $email, $direccion, $ciuadad){
        //1-Abrir conexion
        $db = $this->connect();

        //2- Enviar consulta
        $consulta = $db->prepare('INSERT INTO cliente (Nombre, Apellido, Telefono, Email, Direccion, Ciudad) VALUES (?,?,?,?,?,?,?)');
        $consulta->execute([$nombre, $apellido, $telefono, $email, $direccion, $ciuadad]);

        //3- Obtengo y devuelvo ID=dni de la tarea nueva
        return $db->lastInsertId();        
    }

    function removerCliente($id){
        //1-Abrir conexion
        $db = $this->connect();

        //2-Enviar consulta
        $consulta = $db->prepare('DELETE FROM cliente WHERE id = ?');
        $consulta->execute([$id]);
    }
}
