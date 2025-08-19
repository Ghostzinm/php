

<?php 

include("./template/header.php");

    // $nomeForm = $_POST["nome"];
    // $telForm = $_POST["tel"];
    // $userForm = $_POST["user"];
    // $senhaForm = $_POST["senha"];

    $dsn = 'mysql:dbname=db_forms;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';

    $conexaoBanco = new PDO($dsn, $usuario, $senha);

    $id = (int) $_GET['idConsulta'];
    $scriptBusca = "SELECT * FROM tb_cadastro WHERE id = $id";
    $resultadoConsulta = $conexaoBanco->query($scriptBusca)->fetch();
    
    ?>

    <section>
         <h1 class="mb-5">impressão</h1>
        <main>
            <div class="row cols-2 impressão">
                <div class="col-6 row"><h3>Nome:</h3><h6> <?= $resultadoConsulta ['nome']?>  </h6></div>
                <div class="col-6 row"><h3>Telefone:</h3><h6><?= $resultadoConsulta ['telefone'] ?></h6></div>
            </div>
            <div class="row cols-2 impressão">
                <div class="col-6 row"><h3>user:</h3><h6> <?= $resultadoConsulta ['usuario'] ?>  </h6></div>
                <div class="col-6 row"><h3>Senha:</h3><h6> <?= $resultadoConsulta ['senha'] ?>  </h6></div>
            </div>
            <button type="button" class="btn btn-outline-success mt-5">Enviar</button>
        </main>


        
    </section>
