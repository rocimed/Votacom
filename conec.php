<?php
header('Access-Control-Allow-Origin: *');
// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "votacom";
$con = new mysqli($host, $user, $password, $database);
//echo "Hello";

//Comprobación de la conexión
if($con->connect_error) {
    die("La conexión ha fallado: \n" . $con->connect_error);
}else{
    echo "Conexión exitosa \n";
}
?>