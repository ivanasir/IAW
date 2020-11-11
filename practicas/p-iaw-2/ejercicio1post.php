<HTML>
  <BODY>
    <?php
        echo "El nombre de la fiesta es : ".$_POST['fiesta']. "</br>";
        echo "el numero de personas es : ".$_POST['personas']. "personas </br>";
        echo "el tipo de fiesta es : ".$_POST['tipo']. "</br>";
        echo "el tipo de musica es : ".$_POST['musica']. "</br>";

        if($_POST['ubi']){
            $ele = "";
            foreach ($_POST['ubi'] as $key => $value) {
    
              $ele = $ele.$value.", ";
    
            }
                echo "las ubicaciones elegidas son: ".$ele. " </br>";
    
          }else{
                echo "No ha seleccionado ninguna instalación </br>";
          }
        
          echo "Comentarios adicionales: ".$_POST['comentarios']. " </br>";
    ?>
  </BODY>
</HTML>