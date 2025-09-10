<?php 
function calcularMedia($numeros) {
    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    
    if ($quantidade === 0) {
        return 0;
    }
    
    $media = $soma / $quantidade;
    return $media;

}

echo "A média dos números é: " .calcularMedia([15, 30, 400, -20]);
?>