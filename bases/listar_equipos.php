<?php

session_start();
$servername = "localhost";
$database = "nba";
$username = "test";
$password = "test";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM equipo ORDER by 'name asc'";
$resultado = $conn->query($sql);
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

<h1>Equipos</h1>
<?php
if ($resultado) {
    
    echo "<ol>";
    while( $row = $resultado->fetch_array() )
    {
        echo"<li>".$row['name']."</li>";
    }
    
    echo "<ol />";
    

    $resultado->close();
}
mysqli_close($conn);
?>
</body>
</html>