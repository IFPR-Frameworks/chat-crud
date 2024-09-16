<?php 

    $dsn = "mysql:host=localhost;dbname=BD_Chat";
    $usuario = "root";
    $senha = "bancodedados";

    $conexao = new PDO($dsn, $usuario, $senha);

    //$resultado é a variável que guarda os dados vindos do banco ainda em formato de tabela 
    $resultado = $conexao->query("SELECT * FROM tb_mensagens");

    //o comando fetchAll converte os dados em formato de tabela para outro formatado que o PHP compreenda.
    $mensagens = $resultado->fetchAll(PDO::FETCH_ASSOC);

    print "<pre>";
    print_r($mensagens);
    print "</pre>";

