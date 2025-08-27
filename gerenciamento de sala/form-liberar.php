<?php
echo "<h1>Cadastro PHP</h1>";


$numero = $_POST['sala'];
$dsn = 'mysql:dbname=gerenciamento_salas;host=127.0.0.1';
$usuario = 'root';
$senha = '';
    
    $conn = new PDO($dsn, $usuario, $senha);

    $scriptUpdate = "UPDATE tb_salas 
                     SET turma = null, 
                         professor = null, 
                         dia = null
                     WHERE numero = $numero";

    $scriptPreparado = $conn->prepare($scriptUpdate);
    $scriptPreparado->execute();


    header('Location: tabela.php');
?>
