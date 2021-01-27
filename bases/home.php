<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres cuadrados contiguos con un lado entre 50 y 150 píxeles, al azar.
 *
 * Crea 3 dif con width, height y fondos distintos. Cambia el widht y el heigh con un random
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
  <title>
    DATABASE MENU
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>OPCIONES DATABASE</h1>

  <ol>
    <li>
      <a href="crear_equipo.php">Crear tabla equipo</a>
      <?php
        if(isset($_SESSION['crear_tabla_equipo'])){
          if($_SESSION['crear_tabla_equipo']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_equipo.php">Insertar datos equipo</a>
      <?php
        if(isset($_SESSION['insertar_tabla_equipo'])){
          if($_SESSION['insertar_tabla_equipo']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>

    <li>
        <a href="crear_jugador.php">crear tabla jugadores</a>
        <?php
        if(isset($_SESSION['crear_tabla_jugadores'])){
          if($_SESSION['crear_tabla_jugadores']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
        <a href="insertar_jugadores.php">crear tabla jugadores</a>
        <?php
        if(isset($_SESSION['crear_datos_jugadores'])){
          if($_SESSION['crear_datos_jugadores']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
        <a href="crear_tabla_partido.php">crear tabla partidos</a>
        <?php
        if(isset($_SESSION['crear_tabla_partidos'])){
          if($_SESSION['crear_tabla_partidos']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
        <a href="insertar_datos_partido.php">insertar datos partidos</a>
        <?php
        if(isset($_SESSION['insertar_datos_partidos'])){
          if($_SESSION['insertar_datos_partidos']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
        <a href="crear_tabla_posicion.php">crear tabla posicion</a>
        <?php
        if(isset($_SESSION['crear_tabla_posicion'])){
          if($_SESSION['crear_tabla_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
        <a href="insertar_posicion.php">insertar datos posicion</a>
        <?php
        if(isset($_SESSION['insertar_datos_posicion'])){
          if($_SESSION['insertar_datos_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
        <a href="crear_jugador_posicion.php">crear tabla jugador posicion</a>
        <?php
        if(isset($_SESSION['crear_tabla_jugador_posicion'])){
          if($_SESSION['crear_tabla_jugador_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
        <a href="insertar_datos_jugador_posicion.php">insertar datos jugador posicion</a>
        <?php
        if(isset($_SESSION['insertar_jugador_posicion'])){
          if($_SESSION['insertar_jugador_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
        <a href="borrar_base.php">borrar base datos</a>
        <?php
        if(isset($_SESSION['borrar_base'])){
          if($_SESSION['borrar_base']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
  </ol>

  <footer>
    <p>ivan</p>
  </footer>
</body>
</html>
