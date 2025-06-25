<?php
include "conexao.php";

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

$sql = "INSERT INTO inventario_computadores
(codigo_patrimonio, descricao, marca, modelo, armazenamento, memoria, processador, possui_placa_video, placa_video, sistema_operacional)
VALUES ('$c', '$d', '$m', '$mo', $a, $me, '$p', $pl, '$dp', '$so')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>