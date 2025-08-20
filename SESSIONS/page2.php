<?php

    session_start();

    echo "Bem vindo à página 2".'<br>';

    echo $_SESSION['user_name'].'<br>';
    echo $_SESSION['user_email'].'<br>';

    echo '<br><a href = "page1.php">Página 1</a>';

?>