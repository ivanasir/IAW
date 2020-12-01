<html>
<head></head>
<body>
    <ol>
    <?php
        /*
        Crear un Script php que use un ARRAY.
        Crear un array con todas las provincias de Castilla y León.
        Imprimir Las ciudades en el html.
        Crea una función que se llame getProvinciasCYL().
        La funcion debe devolver un array con las provincias de Castilla y León
        crea una variable con el valor que devuelva esta función (array)
        Imprimir todas las ciudades en el html usando una lista ordenada de html
        usa un html para la salida del script
        */

        $ciudades = [
            "Palencia",
            "Leon",
            "Salamanca",
            "Segovia",
            "Valladolid",
            "Soria",
            "Avila",
            "Zamora",
            "Burgos",
        ];
        
        foreach($ciudades as $ciudades){
            echo "<li>".$ciudades."</li>";
        }

    ?>
    </ol>
    </body>
</html>