<?php 

function cmcVogal($array) {
    $vogais = "aeiou";
    $iniciais = [];

    foreach ($array as $palavra) {
        $primeiraLetra = mb_substr($palavra, 0, 1);
        if (mb_strpos($vogais, $primeiraLetra) !== false) {
            echo "'$palavra' <br>";
        }
    }
    
}
cmcVogal(["abacaxi", "banana", "aracapuca", "bax", "efvdf", "fn", "gl"]);
