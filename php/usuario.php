<?php 
include 'BD.php';

class usuario {

    function __construct(){
        $this->db = new BD();
    }

    public function anadirUsuario($nombre, $apellido1, $apellido2, $responsabilidad, $admin, $contrasena, $observaciones){
        $this->db->getMysqli()->query("INSERT INTO `usuario`(`nombre`, `apellido1`, `apellido2`, `contraseña`, `responsabilidad`, `admin`, `observaciones`) VALUES ('$nombre', '$apellido1', '$apellido2', '$contrasena', '$responsabilidad', '$admin', '$observaciones')");
    }

    public function listarUsuarios(){
        try{
            $result = $this->db->getMysqli()->query("SELECT id, nombre, apellido1, apellido2, responsabilidad, admin, observaciones FROM usuario");

            $numRows = $result->num_rows;

            $arrrayUsuarios = array();
            for ($i = 0; $i<$result->num_rows; $i++){
                $fila = $result->fetch_object();
                $filas[] = $fila;
            }
            return $filas;
        }catch(Exception $e){
            throw e;
        }
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

