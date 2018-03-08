<?php
//Poner condicion si no esta declarada la FUNCION BD.php
include 'BD.php';

class refugiado {

    function __construct(){
        $this->db = new BD();
    }

    public function listarRefugiados(){
        //SELECT de todos los datos de los refugiados
        try{
            $result = $this->db->getMysqli()->query("SELECT `id`, `nombre`, `apellido1`, `apellido2`, `dni`, `medicamentos`, `alergias`, `fecha_entrada`, `fecha_salida`, `observaciones`, `fechaNacimiento`, `telefonoContacto`, `vistar` FROM `refugiado` WHERE `vistar` = 1");
            $numRows = $result->num_rows;

            $arrayVehiculos = array();
            for ($i = 0; $i<$result->num_rows; $i++){
                $fila = $result->fetch_object();
                $filas[] = $fila;
            }
            return $filas;

          }catch (Exception $e){
            throw $e;
          }
    }

    public function seleccionarUnRefugiado($id){
      $this->db->getMysqli()->query("SELECT `id`, `nombre`, `apellido1`, `apellido2`, `dni`, `medicamentos`, `alergias`, `fecha_entrada`, `fecha_salida`, `observaciones`, `fechaNacimiento`, `telefonoContacto` FROM `refugiado` WHERE id = $id");
    }

    public function anadirRefugiado($nombre, $apellido1, $apellido2, $dni, $medicamentos, $alergias, $fechaNacimiento, $telefonoContacto, $observaciones){
        //Introducir la fecha actual
        //INSERT INTO mitabla VALUES ('pepe', 'passworddepepe', GETDATE())
        $this->db->getMysqli()->query("INSERT INTO `refugiado`(`nombre`, `apellido1`, `apellido2`, `dni`, `medicamentos`, `alergias`, `fecha_entrada`, `observaciones`, `fechaNacimiento`, `telefonoContacto`) VALUES ('$nombre', '$apellido1', '$apellido2', '$dni', '$medicamentos', '$alergias', now(), '$observaciones', '$fechaNacimiento', $telefonoContacto)");
    }

    public function fechaSalida($id){
        //El update tiene k ser algo asi
        //UPDATE reefugiado SET fechaSalida=GETDATE() WHERE id = $id;
        $this->db->getMysqli()->query("UPDATE `refugiado` SET `fecha_salida`= now() WHERE id = $id");
    }

    public function eliminarRefugiado($id){
        //Cambiar casilla VISTAR a FALSE
        //UPDATE refugiado Set VISTAR = false;
        $this->db->getMysqli()->query("UPDATE `refugiado` SET `vistar`= 0 WHERE id = $id");
    }

    public function modificarRefugiado(/*TODO LOS CAMPOS*/){
        //UPDATE
         $this->db->getMysqli()->query("");
    }
}
