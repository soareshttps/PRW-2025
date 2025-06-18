<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    
</head>
<body>
    <h1>Página de Processamento</h1>

    <?php 
        $nome = $_POST ['nome_usuario'];
        $pass = $_POST ['senha'];

        $tamanho = strlen($pass);

        if ($tamanho < 8)
        {
            echo "SENHA INVÁLIDA! A senha precisa ter no mínimo 8 caracteres.<br>";
            echo '<a href="index.html" class = "botao">Voltar</a>';
        }

        else 
        {
            echo "Senha válida!\n";
        }

    ?>
</body>
</html>