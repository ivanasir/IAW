<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres carta entre 1 y 10,
 * al azar, e indique el valor más alto.
 *
 * El valor más alto se puede obtener con la función max().
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    La carta más alta.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>La carta más alta</h1>

  <p>Actualice la página para mostrar un nuevo trío de cartas.</p>

<?php
  $a = rand(1, 10);
  $b = rand(1, 10);
  $c = rand(1, 10);
  $d = rand(1, 10);

  $cartaalta = max($a,$b,$c,$d);

  $imgsrc1 = "img/c".$a.".svg";
  $imgsrc2 = "img/c".$b.".svg";
  $imgsrc3 = "img/c".$c.".svg";
  $imgsrc4 = "img/c".$d.".svg";
  $cartasrc = "img/c".$cartaalta.".svg";

  print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";
?>
  <img src ="<?php echo $imgsrc1;?>">
  <img src ="<?php echo $imgsrc2;?>">
  <img src ="<?php echo $imgsrc3;?>">
  <img src ="<?php echo $imgsrc4;?>">
  <h1>la carta alta es </h1>
  <img src ="<?php echo $cartasrc;?>">
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
