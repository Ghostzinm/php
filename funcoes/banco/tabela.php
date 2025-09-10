<?php 

//  Função inserir usuário
// Crie uma função que receba nome e email e insira na tabela usuarios.

function inserirUsuario($nome, $email) {
    include "../config.php";

    $sql = "select * from usuarios where email = :email, nome = :nome";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    echo "Usuário inserido com sucesso!";
}

echo inserirUsuario();

?>