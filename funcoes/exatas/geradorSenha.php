<?php 

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

?>