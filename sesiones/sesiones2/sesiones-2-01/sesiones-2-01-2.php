<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
$_SESSION["errornombre"] = "" ;
//print "    <p class=\"aviso\">Ejercicio incompleto</p>\n";

if (isset($_POST['nombre'])){
    if ($_POST["nombre"] == ""){
        $_SESSION['errornombre']= "nombre obligatorio";
       
    }
}

if($_SESSION['errornombre'] != "" ){
    //nombre no rellenado vamos a 1
     header("location:sesiones-2-01-1.php");

}else{
    //nombre y formulario bien guardo en sesion y vamos a 3
    $_SESSION['nombre'] = $_POST['nombre'];
    header("location:sesiones-2-01-3.php");

}

?>