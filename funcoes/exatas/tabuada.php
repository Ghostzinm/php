<?php 

function tabuada($numero) {
    echo "Tabuada do $numero:<br>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
}

tabuada(5);

?>