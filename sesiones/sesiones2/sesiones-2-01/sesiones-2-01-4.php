<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-4.php
 *
 * @author Escriba aquí su nombre
 *
 */

session_start();
$_SESSION["errorapellido"] = "" ;
//print "    <p class=\"aviso\">Ejercicio incompleto</p>\n";

if (isset($_POST['apellidos'])){
    if ($_POST["apellidos"] == ""){
        $_SESSION['errorapellido']= "apellido obligatorio";
       
    }
}

if($_SESSION['errorapellido'] != "" ){
    //nombre no rellenado vamos a 3
     header("location:sesiones-2-01-3.php");

}else{
    //nombre y formulario bien guardo en sesion y vamos a 5
    $_SESSION['apellidos'] = $_POST['apellidos'];
    header("location:sesiones-2-01-5.php");

}

?>
