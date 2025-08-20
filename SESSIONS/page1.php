<?php

    //cria ou continua uma sessão
    session_start();
    echo "Bem vindo à página 1";

    $_SESSION['user_name'] = 'Ana';
    $_SESSION['user_email'] = 'ana@gmail.com';

    echo '<br><a href = "page2.php">Página 2</a>';

    echo '<br>Id sessão'.session_id();

?>