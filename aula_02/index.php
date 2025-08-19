

<?php 

include("./template/header.php");

if ($_GET['erro'] && $_GET['erro'] == 'sim') {
    echo'<div class="alert alert-danger" role="alert"> Senhas nao confere </div>';
};

?>

<link rel="stylesheet" href="./css/style.css">

    <section class="container">
        <h1 class="mb-5">Formulario</h1>
        <main>
            <form action="./form-cadastro.php" method="post" class="formulario" >
                <input name="nome" type="text" class="input" id="nome" placeholder="nome" required >
                <input name="tel" type="number" class="input" id="telefone" placeholder=" telefone" required>
                <input name="user" type="text" class="input" id="user" placeholder="usuário" required>
                <input name="senha" type="password" class="input" id="senha" placeholder=" senha" required>
                <input name="cSenha" type="password" class="input" id="confirme" placeholder="confirmar senha" required>

                <button type="submit" class="btn btn-outline-success mt-5">Enviar</button>
            </form>
        </main>



    </section>
</body>

</html>