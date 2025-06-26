<?php
include "conexao.php";

$codpatrimonio = $_POST["codigo"];
$desc = $_POST["descricao"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$armazenamento = $_POST["armazenamento"];
$memoria = $_POST["memoria"];
$processador = $_POST["processador"];
$possuiPlaca = $_POST["possuiPlaca"];
$placavideo = $_POST["placavideo"];
$sistemaop = $_POST["sistemaop"];

$sql = "INSERT INTO inventario_computadores
(codigo_patrimonio, descricao, marca, modelo, armazenamento, memoria, processador, possui_placa_video, placa_video, sistema_operacional)
VALUES ('$codpatrimonio', '$desc', '$marca', '$modelo', $armazenamento, $memoria, '$processador', $possuiPlaca, '$placavideo', '$sistemaop')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>