<?php

// Função de soma simples
// Crie uma função que receba dois números como parâmetros e retorne a soma 
// deles.

function soma($num1, $num2) {

    $soma = $num1 + $num2;


echo" A soma de $num1 e $num2 é: " .$soma;

}

soma( 10, 20);


// Função de par ou ímpar
// Crie uma função que receba um número e retorne se ele é par ou ímpar.

function parOuImpar($numero) {

    if ($numero % 2 == 0) {
        echo "O número $numero é par.";
    } else {
        echo "O número $numero é ímpar.";
    }
}

parOuImpar(7);

// Função de maior número
// Crie uma função que receba 3 números e retorne qual deles é o maior.

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

// . Função de média
// Crie uma função que receba um array de números e retorne a média.

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

// Função de tabuada
// Crie uma função que receba um número e retorne a tabuada dele (de 1 a 10)

function tabuada($numero) {
    echo "Tabuada do $numero:<br>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
}

tabuada(5);

// . Função de formatar CPF
// Crie uma função que receba um número de 11 dígitos e retorne no formato:
// 000.000.000-00.

function formatarCPF($cpf)
{

    if (is_string($cpf)) {
        echo "digite apenas números";
    }

    if (strlen($cpf) === 11) {
        $cpfFormatado = substr($cpf, 0, 3) . '.' . 
                        substr($cpf, 3, 3) . '.' . 
                        substr($cpf, 6, 3) . '-' . 
                        substr($cpf, 9, 2);
    }

    echo $cpfFormatado;
}

formatarCPF(12345678901);

//  Função de conversão
// Crie uma função que receba um valor em real (R$) e faça a conversão para 
// dólar (US$), usando um parâmetro para a cotação.


function canbio($real){

    $dolar = $real / 5.42;

    echo "O valor em dólar é: " . number_format($dolar, 2);

}

canbio(100);

// Escreva uma função que receba, o nome de um funcionario e o valor de seu salario e 
// aplique um aumento de acordo com a seguinte regra: salários menores que R$1000 recebem 20% de aumento, 
// entre R$1000 e R$2000 recebem 15%, e acima de R$2000 recebem 10%.

function salario($valor){
    if ($valor < 1000) {
        $valor = $valor + ($valor * 0.20);
    } elseif ($valor >= 1000 && $valor <= 2000) {
        $valor = $valor + ($valor * 0.15);
    } else {
        $valor = $valor + ($valor * 0.10);
    }

    echo "seu salrio é de $valor ";
}

salario(1500);

//  Crie uma função que receba um array de números e retorne um novo array contendo apenas os números pares.

 
function lerNumerosPares($array) {
    foreach ($array as $numero) {
        $par = $numero % 2;
        if ($par == 0) {
            echo $numero . "    é par ";
        }
    }
 }

 lerNumerosPares(array(1,2,3,4,5,6,7,8,9,10,11,12,13,0,15,16,0,));

//  Crie uma função que receba um array de números e retorne o segundo maior número do array.//

function segundoMaior($array) {
    foreach ($array as $numero) {
        $maior = max($array);
    }

    echo"O maior número é: $maior <br>";

}

segundoMaior([10, 25, 47, 3, 89, 14, 100]);

// Faça uma função que retorne o cubo de um número.//


function aoCubo($numero) {
    return $numero ** 3;
}
echo aoCubo(3);

//  Faça uma função que retorne a raiz quadrada de um número.//
function raizQuadrada($numeros){

    echo "A raiz quadrada de $numeros é " . sqrt($numeros);

}

raizQuadrada(9);