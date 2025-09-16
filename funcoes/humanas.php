<!-- Função de boas-vindas
Crie uma função que receba o nome de uma pessoa e retorne a frase:
"Bem-vindo, [nome]!". -->

<?php 

function bemVindo($nome) {


    echo "Bem vindo, $nome!";

}

bemVindo("Hello World");

// Função de inverter string
// Crie uma função que receba uma palavra e retorne ela invertida

function inverterTexto($texto) {
    $textoInvertido = strrev($texto);


echo"O texto $texto invertido é: " .$textoInvertido;

}

inverterTexto("Hello World");

// Função de contar vogais
// Crie uma função que receba uma string e retorne a quantidade de vogais nela.

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

// Função geradora de senhas
// Crie uma função que receba um número (tamanho da senha) e retorne uma 
// senha aleatória usando letras e números

function gerarSenha($tamanho) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    $senha = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $indice = rand(0, strlen($caracteres));
        $senha .= $caracteres[$indice];
    }
    echo "Senha gerada: $senha";
}

gerarSenha(8);

// Crie uma função que verifique se uma letra é vogal ou consoante


function vogalConsoante($letra) {
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    if (in_array($letra, $vogais)) {
        echo "A letra '$letra' é uma vogal.";
    } else {
        echo "A letra '$letra' é uma consoante.";
    }

}

vogalConsoante('b');

// Crie uma função que receba um array de strings e retorne um novo array contendo apenas as strings que começam com uma vogal.
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

