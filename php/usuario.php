<?php 
include 'BD.php';

class usuario {

    function __construct(){
        $this->db = new BD();
    }

    public function anadirUsuario($nombre, $apellido1, $apellido2, $responsabilidad, $admin, $contrasena, $observaciones){
        $this->db->getMysqli()->query("INSERT INTO `usuario`(`nombre`, `apellido1`, `apellido2`, `contrasena`, `responsabilidad`, `admin`, `observaciones`) VALUES ('$nombre', '$apellido1', '$apellido2', '$contrasena', '$responsabilidad', '$admin', '$observaciones')");
    }

    public function listarUsuarios(){
        $this->db->getMysqli->query("SELECT id, nombre, apellido1, apellido2, responsabilidad, admin, observaciones FROM usuario");
    }

    public function buscarPorId($id){
        $this->db->getMysqli->query("SELECT id, nombre, apellido1, apellido2, responsabilidad, admin, observaciones FROM usuario WHERE id=$id");
    }

    public function modificarUsuario($nombre, $apellido1, $apellido2, $responsabilidad, $admin, $contrasena, $observaciones){
        //UPDATE
         $this->db->getMysqli()->query("");
    }

    public function eliminarUsuario($id){
        //UPDATE: cambiar casilla vistar
        $this->db->getMysqli()->query("");
    }
}

