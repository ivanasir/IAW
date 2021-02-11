<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Escriba aquí su nombre
 */

print "<!-- Ejercicio incompleto -->\n";
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>
<?php
  //resetear session
  if(isset($_POST['reset'])){
    $_SESSION['tirada']=[];
  }
    
$valora=rand(1,6);

$valorb=rand(1,6);

$valorc=rand(1,6);

$valort = $valora + $valorb + $valorc;

//seguir añadir valores a session
$_SESSION['tirada'][] = $valort;

//echo $_SESSION['tirada'];
//var_dump($_SESSION['tirada']).die;

if(isset($_SESSION['tirada'])){

  echo "<ul>";
  foreach ($_SESSION['tirada'] as $key => $value) {
      echo "<li>tirada ".$key." : ".$value."</li>";

      //comparar valor 
      if($value > 8){
        echo "<p style = color:red>".$value."</p>";
      }else{
        echo $value;
      }
  echo "</ul>";
  }
}

?>
<img src =<?php echo "img/".$valora.".svg";?> >
<img src =<?php echo "img/".$valorb.".svg";?> >
<img src =<?php echo "img/".$valorc.".svg";?> >

<form action="tirada-dados-1.php" method="POST" value="tirar">
  <p>
    <input type="submit" value="volver a tirar">
    <input type="submit" value="reset" name="reset">
  </p>
</form>

<footer>
  <p></p>
</footer>
</body>
</html>
