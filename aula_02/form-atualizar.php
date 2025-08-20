<?php
echo "<h1>Atualizar php </h1>";

$formNome = $_POST["nome"];
$formTel = $_POST["tel"];
$formUsuario = $_POST["user"];
$formSenha = $_POST["senha"];
$formConfSenha = $_POST["cSenha"];

$id = $_POST["txtId"];
$dsn = 'mysql:dbname=db_forms;host=127.0.0.1';
$usuario = 'root';
$senha = '';

if ($formSenha != $formConfSenha) {
    header('location:index.php?erro=sim');
} else {

    $conn = new PDO($dsn, $usuario, $senha);

    $scriptAtualizar = "UPDATE tb_cadastro 
    SET nome=:nome, telefone=:telefone, usuario=:usuario, senha=:senha  
    WHERE id = $id";


    $scriptPreparado = $conn->prepare($scriptAtualizar);
    $scriptPreparado->execute([
        ":nome" => $formNome,
        ":telefone" => $formTel,
        ":usuario" => $formUsuario,
        ":senha" => $formSenha
    ]);
    header('location:tabela.php');
};
