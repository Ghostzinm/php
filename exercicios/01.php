<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php




    // ===========================01=========================================
    $numero = null;


    echo "<h1>Exercicios 1</h1><p><strong>desc:</strong>Escreva um programa que 
    verifique se um número fornecido pelo usuário é positivo, negativo ou zero.</p>";
    if ($numero <= 0) {
        echo "Teu número é negativo ou zero";
    };
    echo "<br>";

    // ===========================02=========================================
    $idade = null;


    echo "<h1>Exercicios 2</h1><p><strong>desc: </strong>  Crie um programa que leia a 
    idade de uma pessoa e informe se ela é maior de idade (18 anos ou mais) ou menor de idade. </p>";
    if ($idade <= 17) {
        echo "voce é menor de idade";
    } else {
        echo "voce é maior de idade";
    };
    echo "<br>";

    // ===========================03=========================================
    $par = 2;


    echo "<h1> Exercicios 3</h1><p><strong>desc:</strong>  Escreva um programa que verifique se um número 
    fornecido pelo usuário é par ou ímpar. </p>";

    if ($par % 2 == 0) {
        echo "esse número é par";
    } else {
        echo "esse é um numero impar";
    };
    echo "<br>";

    // ===========================04=========================================
    echo "<h1> Exercicios 4</h1><p><strong>desc:</strong>   Imprima os números de 1 a 10 utilizando um laço 
    de repetição.</p>";
    for ($i = 0; $i < 11; $i++) {
        echo "[$i]";
    };
    echo "<br>";

    // ===========================05=========================================
    echo "<h1> Exercicios 5</h1><p><strong>desc:</strong>  Imprima todos os números pares de 1 a 20 utilizando 
    um laço de repetição. </p>";

    for ($i = 2; $i < 21; $i = $i + 2) {
        echo "[$i]";
    };
    echo "<br>";

    // ===========================06=========================================
    $soma = 0;



    echo "<h1> Exercicios 6</h1><p><strong>desc: </strong>   Calcule a soma de todos os números de 1 a 100
     utilizando um laço de repetição.(5050)</p>";

    for ($i = 1; $i <= 100; $i++) {
        $soma += $i;
    }

    echo "A soma de todos os números de 1 a 100 é: $soma";
    echo "<br>";

    // ===========================07=========================================
    $letra = "a";


    echo "<h1> Exercicios 7</h1><p><strong>desc:</strong>   Escreva um programa que verifique se uma letra 
    fornecida pelo usuário é uma vogal ou uma consoante.</p>";

    if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u" or $letra == "y") {
        echo "é uma vogal";
    } else {
        echo "é uma consoante";
    };
    echo "<br>";

    // ===========================08=========================================
    $mes = null;


    echo "<h1> Exercicios 8</h1><p><strong>desc:</strong>  Escreva um programa que leia um mês do ano e informe 
    quantos dias ele tem.</p>";

    if ($mes % 2 == 0) {
        echo "esse mes tem 30 dias ou menos";
    } else {
        echo "esse mes tem menos de 31
             dias";
    };
    echo "<br>";

    // ===========================09=========================================
    $salario = 900;


    echo "<h1> Exercicios 9</h1><p><strong>desc:</strong>  Escreva um programa que leia o salário de um funcionário
     e aplique um aumento de acordo com a seguinte regra: salários menores que R$1000 recebem 20% de aumento, entre R$1000
      e R$2000 recebem 15%, e acima de R$2000 recebem 10%. </p>";

    if ($salario < 1000) {
        $salario = $salario + $salario * 0.20;
        echo "$salario";
    } else if ($salario >= 1000) {
        $salario = $salario + $salario * 0.15;
        echo "$salario";
    } else if ($salario >= 2000) {
        $salario = $salario + $salario * 0.10;
        echo "$salario";
    };
    echo "<br>";

    // ===========================10=========================================
    $numA = 1;
    $numB = 0;
    $i = 0;
    $qtdTermos = 10;

    echo "<h1> Exercicios 10</h1><p><strong>desc:</strong> Imprima os primeiros 10 números da sequência de Fibonacci utilizando um
     laço de repetição.  </p>";



    while ($i < $qtdTermos) {
        echo $numA . " ";
        $num = $numA + $numB;
        $numB = $numA;
        $numA = $num;
        $i++;
    }

    echo "<br>";

    // ===========================11=========================================


    echo "<h1> Exercicios 11</h1><p><strong>desc:</strong>Inverter uma String, implemente um programa que inverte uma String fornecida pelo
     usuário utilizando um laço de repetição.</p>";


    $string = "Baruque";
    $tamanho = strlen($string);
    $invertida = "";

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= $string[$i];
    }

    echo "<p class='fs-4'><strong>String: </strong>{$string}</p>";
    echo "<p class='fs-4'><strong>String invertida: </strong>{$invertida}</p>";

    ?>

</body>

</html>