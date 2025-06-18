<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos</title>
</head>
<body>
    
    <?php
        $opcao = $_POST ['opcao'];

        $numero1 = $_POST ['numero1'];
        $numero2 = $_POST ['numero2'];

        if ($opcao == 1)
        {
            $soma = $numero1 + $numero2;
            echo "RESULTADO: $soma. <br>";
        }

        elseif ($opcao == 2)
        {
            $sub = $numero1 - $numero2;
            echo "RESULTADO: $sub.<br>";
        } 

        elseif ($opcao == 3)
        {
            $div = $numero1 / $numero2;
            echo "RESULTADO: $div.<br>";
        }

        elseif ($opcao == 4)
        {
            $mult = $numero1 * $numero2;
            echo "RESULTADO: $mult.<br>";
        }
    ?>

</body>
</html>