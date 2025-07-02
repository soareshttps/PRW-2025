<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <?php
    include 'conexao.php';
    $id = $_GET['id'] ?? '';
    if ($id) {
        $sql = "DELETE FROM fluxo_caixa WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "Informações excluídas com sucesso!";
        } else {
            echo "Erro ao excluir: " . mysqli_error($conn);
        }
    } else {
        echo "ID inválido.";
    }
    mysqli_close($conn);
    ?>
    <div>
        <a href="listar_fluxo_caixa.php">Voltar para a listagem de fluxo</a>
    </div>
</body>
</html>