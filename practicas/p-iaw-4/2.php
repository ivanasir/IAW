<?php

    $a = 155;
    $b = 154;

    function getGratherValue($a,$b){
        
    if ($a < $b) {
        echo " el mayor numero es ".$b;
    } elseif ($a > $b) {
        echo " el mayor numero es ".$a;
    } else {
        echo $a." es igual que ".$b;
        }
    }

    getGratherValue($a,$b)


?>