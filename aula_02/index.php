

<?php 

include("./template/header.php");

?>

    <section class="container">
        <h1 class="mb-5">Formulario</h1>
        <main>
            <form action="./impressao.php" method="post" class="formulario">
                <input name="nome" type="text" class="input" id="nome" placeholder="nome">
                <input name="tel" type="number" class="input" id="telefone" placeholder=" telefone">
                <input name="user" type="text" class="input" id="user" placeholder="usuário">
                <input name="senha" type="password" class="input" id="senha" placeholder=" senha">
                <input name="cSenha" type="password" class="input" id="confirme" placeholder="confirmar senha">

                <button type="submit" class="btn btn-outline-success mt-5">Enviar</button>
            </form>
        </main>



    </section>
</body>

</html>