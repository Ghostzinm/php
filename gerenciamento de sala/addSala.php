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
        <form action="./form-sala.php" method="post" class="shadow-lg p-4 rounded ">
            <div class="mb-3">
                <label class="form-label">adicionar e reservar sala</label>
            </div>
            <div class="mb-3">
                <label  class="form-label">Sala</label>
                <input name="num" type="number" class="form-control" id="sala" placeholder="Digite o número da sala" required>
            <div class="mb-3">
                <label  class="form-label">Turma</label>
                <input name="turmaAdd" type="text" class="form-control" id="turma" placeholder="Digite o nome da turma">
            </div>
            <div class="mb-3">
                <label  class="form-label">Professor</label>
                <input name="profAdd" type="text" class="form-control" id="prof" placeholder="Digite o nome do professor" required>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label  class="form-label">dia</label>
                    <input name="dataAdd" type="date" class="form-control" id="data" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
                <a href="./tabela.php" class="btn btn-outline-secondary mt-4">Voltar</a>
        </form>
    </main>

</section>
</body>

</html>