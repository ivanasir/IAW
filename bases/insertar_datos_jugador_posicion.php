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

$sql = "INSERT INTO `jugador-posicion` (`jugador_id`, `posicion_id`) VALUES
(1, 3),
(2, 3),
(4, 3),
(4, 4);";

$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['insertar_jugador_posicion'] = true;
}else{
    $_SESSION['insertar_jugador_posicion'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");

?>