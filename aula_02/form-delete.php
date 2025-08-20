<?php
echo"<h1>delet</h1>";

$dsn = 'mysql:dbname=db_forms;host=127.0.0.1';
$usuario = 'root';
$senha = '';

$conn = new PDO($dsn, $usuario, $senha);

$id = $_GET["idDelete"];
var_dump($id);

$scriptDelete = 'DELETE FROM tb_cadastro WHERE id = :id';

$scriptPreparado = $conn->prepare($scriptDelete);
$scriptPreparado->execute([':id'=> $id]);

if ($scriptPreparado->rowCount() > 0) {
    echo '<H1>REGISTRO APAGADO COM SUCESSO</H1>';
    header('location:tabela.php');
    
} else {
    echo '<h1APAGOU NAO</h1>';
};
