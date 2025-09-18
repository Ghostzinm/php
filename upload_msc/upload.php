<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_album";

// Conexão com o banco
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha ao conectar com o banco de dados: " . $conexao->connect_error);
}

// Verifica se um arquivo foi enviado sem erros
if (isset($_FILES["txtArquivo"]) && $_FILES["txtArquivo"]["error"] == 0) {

    $nome_albumn = $conexao->real_escape_string($_POST['txtAlbum']);
    $nome_musica = $conexao->real_escape_string($_POST['txtMusica']);
    $arquivo_tmp = $_FILES['txtArquivo']['tmp_name'];
    $nome_original = $_FILES['txtArquivo']['name'];

    $extensao = pathinfo($nome_original, PATHINFO_EXTENSION);
    $extensao = strtolower($extensao);

    // Verifica extensões permitidas
    $extensoes_permitidas = ['mp3', 'wav', 'ogg', 'flac'];
    if (!in_array($extensao, $extensoes_permitidas)) {
        die("Extensão de arquivo não permitida.");
    }

    // Garante que o diretório exista
    $diretorio = './uploads/';
    if (!is_dir($diretorio)) {
        mkdir($diretorio, 0777, true);
    }

    $novo_nome = $nome_musica . "_" . uniqid() . "." . $extensao;
    $caminho_upload = $diretorio . $novo_nome;

    if (move_uploaded_file($arquivo_tmp, $caminho_upload)) {

        $sql = "INSERT INTO musicas (nome_albumn, nome_musica, localizacao)
                VALUES ('$nome_albumn', '$nome_musica', '$caminho_upload')";

        if ($conexao->query($sql) === TRUE) {
            echo "<h1>Música no álbum '{$nome_albumn}' cadastrada com sucesso!</h1>";
            echo "<p>Nome da música: {$nome_musica}</p>";
            echo "<p>Nome do arquivo: {$novo_nome}</p>";
            echo "<p><a href='index.php'>Voltar</a></p>";
        } else {
            echo "Erro ao salvar música no banco de dados: " . $conexao->error;
        }
    } else {
        echo "Erro ao mover o arquivo para a pasta de uploads.";
    }
} else {
    echo "Nenhum arquivo encontrado ou erro no envio do arquivo.";
}

?>
