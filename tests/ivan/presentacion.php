<html>
    <head>Presentacion</head>
    <body>
        <?php
            $nombre = "ivan" ;
            $apellidos = "garcia gonzalez " ;
            $edad = "25" ;
            $foto = "" ;
            $cursos = array("ESO", " Instalaciones Eléctricas y Automáticas", "Sistemas Electrotécnicos y Automatizados");
            $foto = "<img src=https://cdn.dopl3r.com//media/memes_files/bob-esponja-pensando-plantilla-APImB.jpg";

            echo "mi nombre es: ";
            echo $nombre ;
            echo "<br>";
            echo "mis apellidos son: ";
            echo $apellidos ;
            echo "<br>";
            echo "mi edad es: ";
            echo $edad ;
            echo "<br>";
            echo "mis anteriores cursos son ";
            echo $cursos[0] . ", " . $cursos[1] . ", " . $cursos[2] . ".";
            echo "<br>";
            echo "$foto <br>";
        ?>

        <form action="presentacion.php" method="post">
            Ingrese nombre:<input type="text" name="nombre"><br>
            Ingrese su correo:<br>
            <textarea name="correo"></textarea>
            <br>
            <input type="submit" value="enviar">
        </form>

    </body>

</html> 