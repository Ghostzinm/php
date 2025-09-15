<?php 

function vogalConsoante($letra) {
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    if (in_array($letra, $vogais)) {
        echo "A letra '$letra' é uma vogal.";
    } else {
        echo "A letra '$letra' é uma consoante.";
    }

}

vogalConsoante('b')

?>