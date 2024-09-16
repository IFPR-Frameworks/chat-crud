<?php 

    $dsn = "mysql:host=localhost;dbname=BD_Chat";
    $usuario = "root";
    $senha = "bancodedados";

    $conexao = new PDO($dsn, $usuario, $senha);

    $mensagem_do_form = $_GET['campo_mensagem'];

    $resultado = $conexao->exec("INSERT INTO tb_mensagens (mensagem) VALUES('$mensagem_do_form')");

    print_r("registros inseridos: " . $resultado);

