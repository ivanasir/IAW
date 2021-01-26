<?php 
session_start();

$servername = "localhost";
$database = "nba";
$username = "test";
$password = "test";

// conectarte

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "DROP DATABASE `nba`";

$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['borrar_base'] = true;
}else{
    $_SESSION['borrar_base'] = false;
}

$sql = "CREATE DATABASE IF NOT EXISTS `nba`";

$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['borrar_base'] = true;
}else{
    $_SESSION['borrar_base'] = false;
}
mysqli_close($conn);

header("Location:home.php");


?>


