<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/
session_start();
$servername = "localhost";
$database = "nba";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS `posicion` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(250) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;";

$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['crear_tabla_posicion'] = true;
}else{
    $_SESSION['crear_tabla_posicion'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");

?>