<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<body>
    <?php
include "conexao.php";

$sql = "SELECT * FROM fluxo_caixa";
$res = $conn->query($sql);

echo "<h2>Listagem de Fluxo</h2>";

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Data: " . $row["data"] . "<br>";
        echo "Tipo: " . $row["tipo"] . "<br>";
        echo "Valor: " . $row["valor"] . "<br>";
        echo "Histórico: " . $row["historico"] . "<br>";
        echo "Cheque: " . ($row["cheque"] ? "Sim" : "Não") . "<br>";
        echo "<a href='altera_fluxo_caixa.php?id=" . $row["id"] . "'>Alterar</a><br>";
        echo "<a href = 'excluir_fluxo_caixa.php?id=" . $row["id"] . "'>Excluir</a><br><hr>";
    }
} else {
    echo "Nada foi cadastrado.";
}

$conn->close();
?>
<br>
<li><a href="index.php">Página Principal</a></li>
</body>
</html>