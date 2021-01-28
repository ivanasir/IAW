<?php

session_start();
$servername = "localhost";
$database = "nba";
$username = "test";
$password = "test";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['nombre_jugador']) && $_POST['nombre_jugador'] != ' ' ){
    unset($_SESSION['error_insertar_jugador']);

    $sql = "INSERT INTO `jugador` (`name`,`equipo_id`) values ('".$_POST['nombre_jugador']."','".$_POST['equipoid']."')";

    $resultado = $conn->query($sql);
    var_dump($_POST['nombre_jugador']);
    if (!$resultado) {
        die("error al insertar");
    }
    mysqli_close($conn);

    header("Location:home.php");
}else{
    $_SESSION['error_insertar_jugador'] = "El nombre  del jugador es necesario";
    mysqli_close($conn);
    
    header("Location:insertar_datos_jugador_form.php");
}










?>