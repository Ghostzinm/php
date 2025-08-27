<?php echo "<h1>cadastro php </h1>";

$formNum = $_POST["num"];
$formSala = $_POST["salaAdd"];
$formTurma = $_POST["turmaAdd"];
$formProf = $_POST["profAdd"];
$formData = $_POST["dataAdd"];

$dsn = 'mysql:dbname=gerenciamento_salas;host=127.0.0.1';
$usuario = 'root';
$senha = '';

$conn = new PDO($dsn, $usuario, $senha);

$scriptCadastro = "INSERT INTO
    tb_salas (
        numero,
        turma,
        professor,
        dia
    )
    VALUES (
        :numero,
        :turma,
        :professor,
        :dia
    )";


    $scriptPreparado = $conn->prepare($scriptCadastro);
    $scriptPreparado->execute([
        ":numero" => $formNum,
        ":turma" => $formTurma,
        ":professor" => $formProf,
        ":dia"=> $formData
    ]);
    header('location:tabela.php');
?>
