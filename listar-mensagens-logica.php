<?php 
    require __DIR__.'/app/conexao/Conexao.php';

    $conexao = obterConexao();

    //$resultado é a variável que guarda os dados vindos do banco ainda em formato de tabela 
    $resultado = $conexao->query("SELECT * FROM tb_mensagens");

    //o comando fetchAll converte os dados em formato de tabela para outro formatado que o PHP compreenda.
    $mensagens = $resultado->fetchAll(PDO::FETCH_ASSOC);

    print "<pre>";
    print_r($mensagens);
    print "</pre>";

