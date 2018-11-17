<?php
class BD {

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'erie_caducidades';
    private $mysqli;

    public function __construct() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
        /*if ($this->mysqli->connect_error) {
            header('Location: /Login/index.php');
            //die("Connection failed: " . $this->mysqli->connect_error);
        }*/
        
    }

    public function getMysqli(){
        return $this->mysqli;
    }

    public function ok(){
        echo 'ok';
    }
}

?>

<!-- EJEMPLO CONEXION BBDD

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "basedatosmaster";
$tbl_name = "Usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
-->
