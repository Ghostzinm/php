<?php 

function segundoMaior($array) {
    foreach ($array as $numero) {
        $maior = max($array);
    }

    echo"O maior número é: $maior <br>";

}

segundoMaior([10, 25, 47, 3, 89, 14, 100]);