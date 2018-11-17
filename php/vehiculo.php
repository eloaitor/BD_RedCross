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
        $this->db->getMysqli()->query("INSERT INTO `vehiculos`(`matricula`, `marca`, `modelo`, `observacion`, `itv`, `polizaSeguro`) VALUES ('$matricula', '$marca', '$modelo', '$observacion', '$itv', $polizaSeguro)"); 
    }

    public function modificarVehiculo($id){
        $this->db->getMysqli()->query("");
    }


    /*
    *  INCIDENCIAS
    */
    public function nuevaIncidencia($idVehiculo, $incidencia, $observaciones){
        $this->db->getMysqli()->query("INSERT INTO `incidencia_vehiculo`(`id_vehiculo`, `incidencia`, `observaciones`) VALUES ($idVehiculo, '$incidencia', '$observaciones')");
    }

    public function listarIncidencias(){
        try{
            $result = $this->db->getMysqli()->query("SELECT I.id AS 'IdIncidencia', V.matricula, I.incidencia, I.observaciones FROM incidencia_vehiculo I, vehiculos V WHERE I.id_vehiculo = V.id ");
            $numRows = $result->num_rows;
            
            if($numRows > 0){
                $arrayVehiculos = array();
                for ($i = 0; $i<$result->num_rows; $i++){
                    $fila = $result->fetch_object();
                    $filas[] = $fila;
                }
                return $filas;
            }else{
                return null;
            }
            
        }catch (Exception $e){
            throw $e;
        }
    }

    public function seleccionarIncidencia($id){
        $result = $this->db->getMysqli()->query("SELECT I.id AS 'IdIncidencia', V.matricula, I.incidencia, I.observaciones, I.id_vehiculo AS 'IdVehiculo' FROM incidencia_vehiculo I, vehiculos V WHERE I.id_vehiculo = V.id AND I.id = $id AND I.vistar = 1");
        $numRows = $result->num_rows;
        
        $arrayVehiculos = array();
        for ($i = 0; $i<$result->num_rows; $i++){
            $fila = $result->fetch_object();
            $filas[] = $fila;
        }
        return $filas;
    }

    public function modificarIncidencia($id, $incidencia, $observaciones){
        $this->db->getMysqli()->query("UPDATE `incidencia_vehiculo` SET `incidencia`='$incidencia',`observaciones`='$observaciones' WHERE id = $id");
    }

    public function eliminarIncidencia($id){
        $this->db->getMysqli()->query("UPDATE `incidencia_vehiculo` SET `vistar`=0 WHERE id = $id");
    }
}