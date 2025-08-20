<?php

include("./template/header.php");

if ($_GET['erro'] && $_GET['erro'] == 'sim') {
    echo '<div class="alert alert-danger" role="alert"> Senhas nao confere </div>';
};


$nome = '';
$telefone = '';
$usuario = '';
$tituloFormulario = 'Atualizar Usuario';
$actionFormulario = './form-atualizar.php';

if (isset($_GET['id']) && !empty('id')) {

    $id = $_GET['id'];
    $dsn = 'mysql:dbname=db_forms;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';

    $conn = new PDO($dsn, $usuario, $senha);

    $scriptSelect = "SELECT * FROM tb_cadastro WHERE id = $id";

    $dadosSelect = $conn->query($scriptSelect)->fetch();

    $nome = $dadosSelect["nome"];
    $telefone = $dadosSelect["telefone"];
    $usuario = $dadosSelect["usuario"];
};


?>

<link rel="stylesheet" href="./css/style.css">

<section class="container">
    <h1 class="mb-5">Formulario</h1>
    <main>

        <h1 class="fs text-center"><?= $tituloFormulario?></h1>
        <form action="<?= $actionFormulario ?>" method="post" class="formulario">

                <input type="hidden" name="txtId" value="<?= $id ?>">
                <input value="<?= $nome ?>" name="nome" type="text" class="input" id="nome" placeholder="nome" required>
                <input value="<?= $telefone ?>" name="tel" type="number" class="input" id="telefone" placeholder=" telefone" required>
                <input value="<?= $usuario ?>" name="user" type="text" class="input" id="user" placeholder="usuário" required>
                <input name="senha" type="password" class="input" id="senha" placeholder=" senha" required>
                <input name="cSenha" type="password" class="input" id="confirme" placeholder="confirmar senha" required>

                <button type="submit" class="btn btn-outline-success mt-5">Enviar</button>
            </form>
    </main>



</section>
</body>

</html>