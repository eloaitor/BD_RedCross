<?php
class BD {
    
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'erie_caducidades';
    private $mysqli;

    public function __construct() {
        if ($this->mysqli->connect_error) {
            die("Error al conectar a la Base de Datos");
            //die("Connection failed: " . $this->mysqli->connect_error);
        }
        $this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);

        
    }
    
    public function getMysqli(){
        return $this->mysqli;
    }
    
    public function ok(){
        echo 'ok';
    }
}

/*$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($this->mysqli) {
    die("Connection failed: " . $conn->connect_error);
}*/
?> 
