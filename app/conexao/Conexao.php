<?php 

    function obterConexao() {
        $dsn = "mysql:host=localhost;dbname=BD_Chat";
        $usuario = "root";
        $senha   = "bancodedados";

        $conexao = new PDO($dsn, $usuario, $senha);

        return $conexao;
    }
