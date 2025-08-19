<?php
echo "<h1>cadastro php </h1>";


$formNome = $_POST["nome"];
$formTel = $_POST["tel"];
$formUsuario = $_POST["user"];
$formSenha = $_POST["senha"];
$formConfSenha = $_POST["cSenha"];

$dsn = 'mysql:dbname=db_forms;host=127.0.0.1';
$usuario = 'root';
$senha = '';

if ($formSenha != $formConfSenha) {
    header('location:index.php?erro=sim');
} else {

$conn = new PDO($dsn, $usuario, $senha);

$scriptCadastro = "INSERT INTO
    tb_cadastro (
        nome,
        telefone,
        usuario,
        senha
    )
    VALUES (
        :nome,
        :telefone,
        :usuario,
        :senha
    )";


    $scriptPreparado = $conn->prepare($scriptCadastro);
    $scriptPreparado->execute([
        ":nome" => $formNome,
        ":telefone" => $formTel,
        ":usuario" => $formUsuario,
        ":senha" => $formSenha
    ]);
    header('location:tabela.php');
    
};