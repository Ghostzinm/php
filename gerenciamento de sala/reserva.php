<?php

include("./templates/header.php");

$dsn = 'mysql:dbname=db_forms;host=127.0.0.1';
$usuario = 'root';
$senha = '';

$conexaoBanco = new PDO($dsn, $usuario, $senha);

$scriptConsulta = 'SELECT * FROM tb_salas';

?>

<section>
    <h1 class="text-center my-4">Reservar salas</h1>

    <main class="container my-4 ">
        <form class="shadow-lg p-4 rounded ">
            <div class="mb-3">
                <label name="sala" class="form-label">reservando sala ID</label>
            </div>
            <div class="mb-3">
                <label name="turma" class="form-label">Turma</label>
                <input type="text" class="form-control" id="turma" placeholder="Digite o nome da turma">
            </div>
            <div class="mb-3">
                <label name="prof" class="form-label">Professor</label>
                <input type="text" class="form-control" id="prof" placeholder="Digite o nome do professor">
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label name="começo" class="form-label">dia</label>
                    <input type="date" class="form-control" id="data">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
                <a href="./tabela.php" class="btn btn-outline-secondary mt-4">Voltar</a>
        </form>
    </main>

</section>
</body>

</html>