<?php
/**
 * Escriba un programa que cada vez que se ejecute
 * muestre un círculo de 50px de radio y de un color elegido al azar.
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Procesar Login</title>
</head>

<body>
  <h1>Login</h1>


  <?php
    
    $usernameValid = "ivan";
    $usernameValid2 = "admin";
    $passwordValid = "12";
    $passwordValid2 = "12";
    $errores = [];

    if(isset($_POST['enviar'])){

        if(isset($_POST['username']) && isset($_POST['password'])) { 
            if($_POST['username'= $usernameValid && ($_POST['password'] == $passwordValid){
            
            }

            if($_POST['username'= $usernameValid2 && ($_POST['password'] == $passwordValid2){
            
        }else{}
    
    $errores[] = "Usuario no encontrado";
    $errores[] = "Pasword no encontrada";

    if(count($errores) == 0){
        // LOGIN OK
        $_SESSION['sesion'] = "iniciada";
        header("Location: http://localhost/Iaw/sesiones/sesiones/login.php");
        die();
    }else{
        //ERRORES TIENE VALORES, LUEGO EL LOGIN HA FALLADO
        echo "<ul>";
        foreach($errores as $error ){

            echo "<li>".$error."</li>";
            
        }
        echo "</ul>";
    }

    ?>
</body>
</html>
