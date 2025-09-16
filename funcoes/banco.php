<?php

// //  Função de conexão com banco
// Crie uma função que retorne um objeto PDO conectado ao banco
function conexaoBanco(): PDO
{
    $dsn = "mysql:dbname=db_gerenciador_sala;host=127.0.0.1";
    $usuario = "root";
    $senha = "";

    $conn = new PDO($dsn, $usuario, $senha);

    return $conn;
}

// Função inserir usuário
// Crie uma função que receba nome e email e insira na tabela usuarios.
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

// . Função listar usuários
// Crie uma função que recebe o nome de uma tabela e retorne todos os dados 
// dela
function listarUsers($tb_name = 'pessoas'): array
{
    $conn = conexaoBanco();

    $scriptSQL = "SELECT * FROM $tb_name";

    $prepare = $conn->query($scriptSQL)->fetchAll();

    return $prepare;
}

$resultadoLista = listarUsers();

// Função buscar usuário por ID
// Crie uma função que receba um nome de tabela e um id e retorne os dados 
// correspondente.
function pesquisar($id = 0, $tb_name='pessoas') : array{
    $conn = conexaoBanco();
    $scriptSQL = "SELECT * FROM $tb_name WHERE id = $id";

    $prepare = $conn->query($scriptSQL)->fetchAll();
    return $prepare;
}

var_dump(pesquisar(6));

// Função excluir usuário
// Crie uma função que receba nome de tabela e um id e exclua o usuário do 
// banco
function deletarUser($id, $tb_name = 'pessoas'): bool {
    $conn = conexaoBanco();
    $script = "DELETE FROM $tb_name WHERE id = :id";
    $prepare = $conn->prepare($script)->execute([":id" => $id]);

    return $prepare;
}

if (deletarUser(10)) {
    echo "<h1>Usuário excluído </h1>";
} else {
    echo "<h1>Erro ao excluir</h1>";
}