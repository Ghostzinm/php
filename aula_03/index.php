<?php

require'config.php';

echo"<h1>Aulinha topp</h1>";
function calculaNumero($num1, $num2) {

    $valorA = 7;
    $valorB = 9;

    $resultado = $num1 + $num2;
    echo"O resultado de {$valorA} + {$valorB} é: $resultado";

}

calculaNumero(4,5);


function consulTb($tabela = 'tb_turma', $conn2 = ''): string {

    if (empty($conn2) || $conn2 == '') {

        echo 'Conexão não estabelecida';

        return false;
    }

    $script = 'SELECT * FROM ' . $tabela;
    $res = $conn2->query($script)->fetchAll();

    echo "<pre>";
    var_dump($res);

    return 'banco consultado com sucesso';
}

function conexao()  {

    $dsn = "mysql:dbname=db_gerenciador_sala;host=localhost";
    $usuario = 'root';
    $senha = '';

   return new PDO($dsn, $usuario, $senha);
}

$novaconexao = conexao();


consulTb('tb_sala', conexao());
consulTb('tb_docente', $novaconexao);
consulTb('tb_reserva_sala', $novaconexao);
consulTb();

