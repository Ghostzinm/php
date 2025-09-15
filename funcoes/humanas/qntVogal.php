<?php 

function qntdVogal($texto) {
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) {
            $contador++;
        }
    }

    echo "O texto '$texto' contém $contador vogais.";
}

qntdVogal("Hello World");

?> 