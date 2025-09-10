<?php 

function canbio($real){

    $dolar = $real / 5.42;

    echo "O valor em dólar é: " . number_format($dolar, 2);

}

canbio(100);

?>