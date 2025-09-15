<?php 
 
 function lerNumerosPares($array) {
    foreach ($array as $numero) {
        $par = $numero % 2;
        if ($par == 0) {
            echo $numero . "    é par ";
        }
    }
 }

 lerNumerosPares(array(1,2,3,4,5,6,7,8,9,10,11,12,13,0,15,16,0,));