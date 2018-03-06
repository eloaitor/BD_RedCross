<?php 
//Poner condicion si no esta declarada la FUNCION BD.php
include 'BD.php';

class refugiado {

    function __construct(){
        $this->db = new BD();
    }

    public function listarRefugiados(){
        //SELECT de todos los datos de los refugiados
        $this->db->getMysqli->query("");
    }

    public function anadirRefugiado($nombre, $apellido1, $apellido2, $dni, $medicamentos, $alergias, $fechaNacimiento, $telefonoContacto, $observaciones){
        //Introducir la fecha actual
        //INSERT INTO mitabla VALUES ('pepe', 'passworddepepe', GETDATE())
        $this->db->getMysqli()->query("");
    }

    public function fechaSalida($id){
        //El update tiene k ser algo asi
        //UPDATE reefugiado SET fechaSalida=GETDATE() WHERE id = $id;
        $this->db->getMysqli()->query("");
    }

    public function eliminarRefugiado($id){
        //Cambiar casilla VISTAR a FALSE
        //UPDATE refugiado Set VISTAR = false;
        $this->db->getMysqli()->query("");
    }

    public function modificarRefugiado(/*TODO LOS CAMPOS*/){
        //UPDATE
         $this->db->getMysqli()->query("");
    }
}

