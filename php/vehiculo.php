<?php

include 'BD.php';

class vehiculo {

    function __construct(){
        $this->db = new BD();
    }
    
    public function listarVehiculos(){
        try{
            $result = $this->db->getMysqli()->query("SELECT * FROM vehiculos");
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

    }//ListarVehiculos

    public function anadirVehiculo($matricula, $marca, $modelo, $observacion, $itv, $polizaSeguro){
        $this->db->getMysqli()->query("INSERT INTO `vehiculos`(`matricula`, `marca`, `modelo`, `observacion`. `itv`, `polizaSeguro`) VALUES ('$matricula', '$marca', '$modelo', '$observacion', '$itv', $polizaSeguro)"); 
    }

    public function modificarVehiculo($id){
        $this->db->getMysqli()->query("");
    }
}