<html>

<head>
  <title>Problema</title>
</head>

<body>

<?php

$num = rand(1,3);
echo $num;
echo "<br>";
if ($num = 1) {
  echo "el numero es uno ";
} else {
  if ($num = 2) {
    echo "el numero es dos ";
  } else {
    echo "el numero es tres";
  }
}

?>

</body>

</html>