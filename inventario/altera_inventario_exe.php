<?php
include "conexao.php";

$id = $_POST["id"];
$c = $_POST["cod"];
$d = $_POST["desc"];
$m = $_POST["marca"];
$mo = $_POST["modelo"];
$a = $_POST["arma"];
$me = $_POST["mem"];
$p = $_POST["proc"];
$pl = $_POST["plv"];
$dp = $_POST["descplv"];
$so = $_POST["so"];

$sql = "UPDATE inventario_computadores SET
    codigo_patrimonio = '$c',
    descricao = '$d',
    marca = '$m',
    modelo = '$mo',
    armazenamento = $a,
    memoria = $me,
    processador = '$p',
    possui_placa_video = $pl,
    placa_video = '$dp',
    sistema_operacional = '$so'
WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Alteração realizada com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>