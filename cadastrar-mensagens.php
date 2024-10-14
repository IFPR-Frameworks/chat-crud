<?php 
    require __DIR__.'/app/conexao/Conexao.php';

    $conexao = obterConexao();

    $mensagem_do_form = $_GET['campo_mensagem'];

    $resultado = $conexao->exec("INSERT INTO tb_mensagens (mensagem) VALUES('$mensagem_do_form')");

    print_r("registros inseridos: " . $resultado);

