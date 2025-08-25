<?php

include("./templates/header.php");

$dsn = 'mysql:dbname=gerenciamento_salas;host=127.0.0.1';
$usuario = 'root';
$senha = '';

$conexaoBanco = new PDO($dsn, $usuario, $senha);

$scriptConsulta = 'SELECT * FROM tb_salas';

$resultadoConsulta = $conexaoBanco->query($scriptConsulta)->fetchAll();

?>
<section>
    <h1 class="text-center my-4">Tabela de Usuários</h1>
    <main class="container my-4 ">
        <table class="table table-success table-striped table-hover text-center align-middle shadow-lg ">
            <thead class="table-dark">
                <th scope="col">Sala</th>
                <th scope="col">Quem usa</th>
                <th scope="col">Dia</th>
                <th scope="">Botões</th>
                <a href="./cadastro.php" class="btn btn-warning mb-2"><i class="bi bi-plus-lg"></i></a>
            </thead>
            <tbody>
                <?php foreach ($resultadoConsulta as $linha) { ?>
                    <tr>
                        <td name="a" ><?= $linha['numero']; ?></td>

                        
                            <?php
                            if (empty($linha['turma']) && empty($linha['professor'])) {
                                ?>
                                    <td>Disponível</td>
                                <?php
                                } else { ?>
                                    <td> <?= $linha['turma']; ?>/<?= $linha['professor']; ?></td>
                                <?php } ?>      

                    <td>
                        <?= $linha['dia']; ?>
                    </td>

                    <td>
                        <a href="./reserva.php" class="btn btn-success">Reservar</a>
                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </main>
</section>
</body>

</html>