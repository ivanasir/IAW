<?php
    $asig = array(
        'implantacion',
        'seguridad',
        'sistemas',
        'servicios',
        'bases',
    );

    $prof = array(
        'Javier',
        'Marisol',
        'Florindo',
        'Fidel',
     );

     echo "<p>El profesor o profesora <b>".getRandomArray($prof). "</b> nos da <b>".getRandomArray($asig)."</b>";
     echo "<p>El profesor o profesora <b>".getRandomArray($prof). "</b> nos da <b>".getRandomArray($asig)."</b>";
     echo "<p>El profesor o profesora <b>".getRandomArray($prof). "</b> nos da <b>".getRandomArray($asig)."</b>";

     function getRandomArray($array){
        return $array[rand ( 0 , count ( $array ) - 1 )];

     }

?>