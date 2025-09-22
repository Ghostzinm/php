<?php 
include 'class/Animais.php';

$animais = new Animais();

$nomeAnimal = $_POST['nome_animal'];
$localTemp = $_FILES['foto_animal']['tmp_name'];
$nomeArquivo = $_FILES['foto_animal']['name'];  


echo '<pre>';
var_dump($_FILES);

if ($_SERVER ['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastro'])) {
    $localTemp = $_FILES['foto_animal']['tmp_name'];
    $nomeArquivo = $_FILES['foto_animal']['name'];

    $tipoArquivo = explode('.',  $nomeArquivo);
    $tipoArquivo = '.' . end($tipoArquivo);
    
    $novo_nome = uniqid() . date('YmdHis') . $tipoArquivo;

    move_uploaded_file($localTemp, './img/animais' . $novo_nome);

    $caminho_arquivo = '.animais/' . $novo_nome;

    if(move_uploaded_file($localTemp, './img/' . $caminho_arquivo)){
        $animais->CadastroAnimais($nomeAnimal, $nomeArquivo, $tipoArquivo, $caminho_arquivo);
        echo "Arquivo enviado com sucesso!";
    }
}
