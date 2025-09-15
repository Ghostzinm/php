<?php 
function buscarUsuarios() {
    
    $dsn = 'mysql:dbname=db_gerenciador_sala;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';

        $conexaoBanco = new PDO($dsn, $usuario, $senha);
        $conexaoBanco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $scriptConsulta = 'SELECT * FROM tb_docente';

         return $conexaoBanco->query($scriptConsulta)->fetchAll(PDO::FETCH_ASSOC);
}

$resultadoConsulta = buscarUsuarios();

?>


<section>
    <h1 class="text-center my-4">Tabela de Usuários</h1>
    <main class="container my-4 ">
        <table class="table table-success table-striped table-hover text-center align-middle shadow-lg ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">RA</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultadoConsulta as $linha) { ?>
                    <tr>
                        <td><?= $linha['nome']; ?></td>
                        <td><?= $linha['ra_docente']; ?></td>
                        <?php } ?>
                    </tr>
            </tbody>
        </table>
    </main>
</section>
