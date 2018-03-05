<?php 
//Poner condicion si no esta declarada la FUNCION BD.php
//include 'BD.php';

class caducidad {

    function __construct(){
        $this->db = new BD();
    }

    public function anadirCaducidad($id_material, $caducidad, $cantidad, $id_vehiculo){
        $this->db->getMysqli()->query("INSERT INTO `caducidades`(`id_material`, `caducidad`, 'cantidad', 'id_vehiculo') VALUES ($id_material, $caducidad, $cantidad, $id_vehiculo)");
    }

    //TODO: Pasar aki LISTARCADUCIDAD que esta en material, para ello tengo k mirar el include de la BD
    // mirar si ya esta include o no

}

    

