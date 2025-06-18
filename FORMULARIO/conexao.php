<?php 

    $hostname = "localhost";
    $database = "cadastrado";
    $username = "root";
    $pass = "";
    $porta = 3306;
    // criando conexao com o MySQL - Banco de Dados
    $conn = new mysqli($hostname, $username, $pass, $database, $porta);

    // verifica se a conexão deu certo
    if ($conn)
    {
        echo "Conectado";
    }

    else 
    {
        echo "Não conectado";
    }

?>