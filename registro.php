<?php 
header('Access-Control-Allow-Origin: *');

// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "votacom";
$con = new mysqli($host, $user, $password, $database);

// Comprobación de la conexión
if ($con->connect_error) {
    die("La conexión ha fallado: " . $con->connect_error);
}
// Recuperar los nombres enviados desde JavaScript
$nombres = $_POST['nombres'];

// Insertar los nombres en la base de datos
foreach ($nombres as $nombre) {
    $sql = "INSERT INTO votante (Nombre) VALUES ('$nombre')";
    $query = mysqli_query($con, $sql);
}

// Cerrar la conexión a la base de datos
$con->close();
/*
// Recuperar los nombres enviados desde JavaScript
$nombres = isset($_POST['nombres']) ? json_decode($_POST['nombres']) : [];

// Insertar los nombres en la base de datos
foreach ($nombres as $nombre) {
    $sql = "INSERT INTO votante (Nombre) VALUES ('$nombre')";
    $query = mysqli_query($con, $sql);
}

// Cerrar la conexión a la base de datos
$con->close();
/*
// Recuperar los nombres enviados desde JavaScript
$nombres = json_decode($_POST['nombres']);

// Insertar los nombres en la base de datos
foreach ($nombres as $nombre) {
    $sql = "INSERT INTO votante (Nombre) VALUES ('$nombre')";
    $query = mysqli_query($con, $sql);
}

// Cerrar la conexión a la base de datos
$con->close();
/*header('Access-Control-Allow-Origin: *');
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
// Recuperar los nombres enviados desde JavaScript
$nombres = json_decode($_POST['nombres']);

// Insertar los nombres en la base de datos
foreach ($nombres as $nombre) {
    $sql = "INSERT INTO tu_tabla (nombre) VALUES ('$nombre')";
    $query = mysqli_query($con, $sql);
}

// Cerrar la conexión a la base de datos
$con->close();
/*
// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
echo $nombre;
// Insertar los datos en la tabla
$sql = "INSERT INTO `votante` (`Nombre`, `idvotante`) VALUES (''$nombre'', '1')";
//INSERT INTO votante (idClientes,Nombre) VALUES ('',)";
$query = mysqli_query($con, $sql);
*/

?>

