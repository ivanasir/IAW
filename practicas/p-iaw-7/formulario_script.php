<html>
    <body>
        <form action="formulario_script.php" method="POST">
            valor a <input type="number" name="input_a"></br>
            valor b <input type="number" name="input_b"></br>


            <input type="submit" value="sumar" name="sumar">
            <input type="submit" value="restar" name="restar">
            <input type="submit" value="multiplicar" name="multiplicar">
            <input type="submit" value="dividir" name="dividir">
        </form>
        <?php

        $errores =[];

        if (isset ($_POST ['sumar'])){
            $a=$_POST['input_a'];
            $b=$_POST['input_b'];
            $resultado = $a + $b;
            echo "el resultado de ". "$a  "."  +  "."  $b  "."  es  ".$resultado;

        }
        if (isset ($_POST ['restar'])){
            $a=$_POST['input_a'];
            $b=$_POST['input_b'];
            $resultado = $a - $b;
            echo "el resultado de ". "$a  "."  -  "."  $b  "."  es  ".$resultado;

        }
        if (isset ($_POST ['multiplicar'])){
            $a=$_POST['input_a'];
            $b=$_POST['input_b'];
            $resultado = $a * $b;
            echo "el resultado de ". "$a  "."  *  "."  $b  "."  es  ".$resultado;

        }
        if (isset ($_POST ['dividir'])){
            $a=$_POST['input_a'];
            $b=$_POST['input_b'];
            $resultado = $a / $b;
            echo "el resultado de ". "$a  "."  /  "."  $b  "."  es  ".$resultado;

        }

    ?>
    </body>
</html>