<?php
echo "<h1>Cadastro PHP</h1>";

// Pegando os dados do formulário
$formTurma = $_POST["turma"];
$formProf = $_POST["prof"];
$formData = $_POST["data"];

$numero = $_POST['sala'];
$dsn = 'mysql:dbname=gerenciamento_salas;host=127.0.0.1';
$usuario = 'root';
$senha = '';

    $conn = new PDO($dsn, $usuario, $senha);

    $scriptUpdate = "UPDATE tb_salas 
                     SET turma = :turma, 
                         professor = :professor, 
                         dia = :dia 
                     WHERE numero = :numero";

    $scriptPreparado = $conn->prepare($scriptUpdate);

    $scriptPreparado->execute([
        ':turma' => $formTurma,
        ':professor' => $formProf,
        ':dia' => $formData,
        ':numero' => $numero
    ]);

    // Redireciona após a atualização
    header('Location: tabela.php');
?>
