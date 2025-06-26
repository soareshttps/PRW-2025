<?php
include "conexao.php";

$id = $_POST["id"];
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

$sql = "UPDATE inventario_computadores SET
    codigo_patrimonio = '$codigo',
    descricao = '$descricao',
    marca = '$marca',
    modelo = '$modelo',
    armazenamento = $armazenamento,
    memoria = $memoria,
    processador = '$processador',
    possui_placa_video = $possuiPlaca,
    placa_video = '$placavideo',
    sistema_operacional = '$sistemaop'
WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Alteração realizada com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>