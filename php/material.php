<?php 
//Poner condicion si no esta declarada la FUNCION BD.php
//include 'BD.php';

class material {

    function __construct(){
        $this->db = new BD();
    }

/*
*   MATERIALES  
*/
    public function listarMateriales(){
        try{
            $result = $this->db->getMysqli()->query("SELECT * FROM materiales");
            $numRows = $result->num_rows;

            $arrayMateriales = array();
            for ($i = 0; $i<$result->num_rows; $i++){
                $fila = $result->fetch_object();
                $filas[] = $fila;
            }

            return $filas;

        }catch (Exception $e){
            throw $e;
        }
    }

    public function anadirMaterial($nombre, $vehiculo, $cantidad, $observaciones, $caducidad){
        $this->db->getMysqli()->query("INSERT INTO `materiales`(`nombre`, `cantidad`, `obsevaciones`, `id_vehiculo`, `caducidad`) VALUES ('$nombre', '$cantidad', '$observaciones', '$vehiculo', '$caducidad')");
    }

    public function borrarMaterial(){
    }

    public function editarMaterial(){
    }


/*
*   CADUCIDADES
*/
    public function listarCaducidades(){
        try{
            $result = $this->db->getMysqli()->query("SELECT M.id AS 'idMaterial', V.id AS 'idVehiculo', M.nombre, M.cantidad, M.caducidad, V.matricula, M.obsevaciones AS 'observacionesMaterial' FROM materiales M, vehiculos V WHERE M.id_vehiculo=V.id ");
            
            if($result != null){
                $numRows = $result->num_rows;

                $arrayCaducidades = array();
                for ($i = 0; $i<$result->num_rows; $i++){
                    $fila = $result->fetch_object();
                    $filas[] = $fila;
                }
            }else{
                return null;
            }
            
        }catch (Exception $e){
           throw e;
        }
    }
    
}