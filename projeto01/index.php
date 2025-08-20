<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    
</head>
<body>

    <?php 
        session_start();
        if (isset($_SESSION['user_name']))
        {
            echo 'Olá' .$_SESSION['user_name']. '!<br>';
        }
    ?>

    <h1>Bem-vindo à Página Principal</h1>
    <h2>Menu Principal</h2>
    <ul>
        <li><a href="cadastro.html">Cadastro</a></li>
        <li ><a href="listar.php">Listar Cadastrados</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>