<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <?php 
    
        include 'conexao.php';
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $sql = " SELECT * FROM Usuario WHERE email = '$email'";
        $result = mysqli_query ($conn, $sql);
        $row = mysqli_fetch_array($result);
        print_r($row);
        
        if ($row ['senha'] == $senha) 
        {
            session_start();
            $_SESSION['user_name'] = $row['nome'];
            header('Location: index.php'); 
        }
        
        else
        {
            echo "Usuário ou senha inválida";
        }

        mysqli_close($conn);

    ?>

    <div>
        <a href = "listar.php">Voltar</a>
    </div>

</body>
</html>