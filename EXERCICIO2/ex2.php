<?php

    $nome = $_GET['nome'];

    if (strlen($nome) < 20)
    {
        echo "ERRO! O nome deve conter mais de 20 caracteres.";
    }

    else 
    {
        echo $nome ."<br>";
    }

    $textarea = $_GET['area'];
    echo $textarea."<br>";

    $genero = $_GET['genero'];
    echo "Seu gênero é $genero"."<br>";

    $estado = $_GET['estado'];
    echo "Seu estado é $estado"."<br>";

    $opcao[0] = ($_GET['cine']);
    $opcao[1] = ($_GET['esporte']);
    $opcao[2] = ($_GET['jogos']);
    echo $opcao[0];

    echo "<br> Suas escolhas foram:";

    for($i = 0; $i <3; $i++)
    {
        if (isset ($opcao[$i]))
        {
            echo "<br>".$opcao[$i];
        }
    }


?>