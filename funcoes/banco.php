<?php

function conexaoBanco(): PDO
{
    $dsn = "mysql:dbname=db_gerenciador_sala;host=127.0.0.1";
    $usuario = "root";
    $senha = "";

    $conn = new PDO($dsn, $usuario, $senha);

    return $conn;
}

function inserirUser($nome, $email)
{
    $conn = conexaoBanco();
    $sql = "INSERT INTO pessoas (nome, email) VALUES (:nome, :email)";
    $dados = $conn->prepare($sql)->execute([
        ':nome' => $nome,
        ':email' => $email
    ]);

    if($dados){
        echo "<h1>Dados inseridos </h1>";
    }else{
        echo "<h1>não inseridos</h1>";
    }

}

function listarUsers($tb_name = 'pessoas'): array
{
    $conn = conexaoBanco();

    $scriptSQL = "SELECT * FROM $tb_name";

    $dados = $conn->query($scriptSQL)->fetchAll();

    return $dados;
}

$resultadoLista = listarUsers();

function pesquisar($id = 0, $tb_name='pessoas') : array{
    $conn = conexaoBanco();
    $scriptSQL = "SELECT * FROM $tb_name WHERE id = $id";

    $dados = $conn->query($scriptSQL)->fetchAll();
    return $dados;
}

var_dump(pesquisar(6));

function deletarUser($id, $tb_name = 'pessoas'): bool {
    $conn = conexaoBanco();
    $script = "DELETE FROM $tb_name WHERE id = :id";
    $ok = $conn->prepare($script)->execute([":id" => $id]);

    return $ok;
}

if (deletarUser(10)) {
    echo "<h1>Usuário excluído </h1>";
} else {
    echo "<h1>Erro ao excluir</h1>";
}