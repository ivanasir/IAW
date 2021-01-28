
<html>
<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
    <h1>insertar datos jugadores</h1>
    <form action="insertar_datos_jugador_form_action.php" method="post">
        Nombre: 
        <input type="text" name="nombre_jugador" >
        equipo id:
        <input type="number" name="equipoid" >
        <?php
            if(isset($_SESSION['error_insertar_jugador'])){
                echo "<p>".$_SESSION['error_insertar_jugador']."</p>";
            }

            if(isset($_SESSION['error_insertar_id_jugador'])){
                echo "<p>".$_SESSION['error_insertar_id_jugador']."</p>";
            }
        ?>
        <input type="submit" name="enviar" value="Guardar datos">
    </form>


</body>



















</html>