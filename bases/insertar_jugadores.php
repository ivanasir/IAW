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

$sql = "INSERT INTO `jugador` (`id`, `name`, `equipo_id`) VALUES
(1, 'Marc Gasol', 2),
(2, 'Pau Gasol', 1),
(4, 'Lebron James', 2);";

$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['crear_datos_jugadores'] = true;
}else{
    $_SESSION['crear_datos_jugadores'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");

?>