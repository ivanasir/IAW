<html>
    <head></head>
    <body>
        <?php
            $con = mysqli_connect("127.0.0.1", "test", "test", "world");
            $query = "SELECT * from city order by name desc limit 10";

            if (!$con) {
                die("conexion fallida ".mysqli_connect_error());
            }

            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            if ($resultado = $con->query($query)) { 
                echo "<ol>";
                while( $row = $resultado->fetch_array() )
                {
                    echo  " <li> la ciudad  ".$row['Name'] ."   con codigo   ".$row["CountryCode"] ." pertenece a   " . $row['District']."</li>";
                    echo "<br />";
                }
                echo "</ol>";
                $resultado->close();
            }
            mysqli_close($con);

        ?>
    </body>
</html>