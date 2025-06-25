<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <?php
include "conexao.php";

$sql = "SELECT * FROM inventario_computadores";
$res = $conn->query($sql);

echo "<h2>Lista de Computadores</h2>";

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Patrimônio: " . $row["codigo_patrimonio"] . "<br>";
        echo "Descrição: " . $row["descricao"] . "<br>";
        echo "Marca: " . $row["marca"] . "<br>";
        echo "Modelo: " . $row["modelo"] . "<br>";
        echo "HD: " . $row["armazenamento"] . " MB<br>";
        echo "Memória: " . $row["memoria"] . " MB<br>";
        echo "Processador: " . $row["processador"] . "<br>";
        echo "Possui Placa de Vídeo: " . ($row["possui_placa_video"] ? "Sim" : "Não") . "<br>";
        echo "Descrição da Placa: " . $row["placa_video"] . "<br>";
        echo "Sistema Operacional: " . $row["sistema_operacional"] . "<br>";
        echo "<a href='altera_inventario.php?id=" . $row["id"] . "'>Alterar</a><br><hr>";
    }
} else {
    echo "Nenhum computador cadastrado.";
}

$conn->close();
?>
<br>
<li><a href="index.php">Página Principal</a></li>
</body>
</html>