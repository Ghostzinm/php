<?php 

function qualMaior($num1, $num2, $num3) {

    if ($num1 > $num2 && $num1 > $num3) {
        echo "entre $num1, $num2 e o $num3, o número $num1 é o maior numero.";
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo "entre $num1, $num2 e o $num3, o número $num2 é o maior numero.";
    } elseif ($num3 > $num1 && $num3 > $num2) {
        echo "entre $num1, $num2 e o $num3, o número $num3 é o maior numero.";
    } else {
        echo "Há números iguais entre os maiores.";
    }
}

qualMaior(15,3, 0);

?>