<?php 

include './template/header.php';

?>

<div class="container">
    <h1>cadastro de fotos animas</h1>
    <form action="aux_upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="cadastro" value="1">
        <div>
            <label for="fileUpload">Nome do animal:</label>
            <input type="text" name="nome_animal" id="nome_animal" required>
        </div>
        <div>
            <label for="fileUpload">Selecione uma foto:</label>
            <input type="file" name="foto_animal" id="foto_animal" required>
        </div>
        <button type="submit">cadastrar foto</button>
    </form>
    <?php 
    
    include './class/Animais.php';
    $animais = new Animais();

    $todosAnimais = $animais->consultarAnimais();

    ?>


    <div class="row mt-5">
        <?php  foreach( $todosAnimais as $animal) { ?>
        <div class="card" style="width: 16rem;">
            <img src="./img/<?=$animal['caminho_arquivo'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $animal['nome_animal'] ?> </h5>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

</body>
</html>