<?php

class Animais
{

    private $conn;

    public function __construct() {
        $dns = 'mysql:dbname=db_aula05;host=localhost';
        $usurario = 'root';
        $senha = '';
        
        $this->conn = new PDO ($dns, $usurario, $senha);
    }

    public function consultarAnimais()
    {


        $script = "SELECT * FROM animais";
        $script = $this->conn->prepare($script);

        return $this->conn->lastInsertId();

        
    }
    
    public function consultarAnimaisById($id)
    {

        $dns = 'mysql:dbname=db_aula05;host=localhost';
        $usurario = 'root';
        $senha = '';

        $conn = new PDO($dns, $usurario, $senha);

        $script = "SELECT * FROM animais WHERE id = {$id}";
        $resultado = $conn->prepare($script)->fetchAll();
        
        return $resultado;
        
    }

    public function CadastroAnimais($nome_animal, $nome_arquivo, $tipo_arquivo, $caminho_arquivo)
    {

        $script = "INSERT INTO animais (nome_animal, nome_arquivo, tipo_arquivo, caminho_arquivo) VALUES 
        (:nome_animal, :nome_arquivo, :tipo_arquivo, :caminho_arquivo)";
        
        
        $insert = $this->conn->prepare($script);
        $insert->execute([
            ":nome_animal" => $nome_animal,
            ":nome_arquivo" => $nome_arquivo,
            ":tipo_arquivo" => $tipo_arquivo,
            ":caminho_arquivo" => './img/animais/'
        ]);
        return $this->conn->lastInsertId();
        
    }
}
