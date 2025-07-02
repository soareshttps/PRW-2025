<?php
include "conexao.php";

$id = $_POST["id"];
$data = $_POST["data"];
$tipo = $_POST["opcao"];
$valor = $_POST["valor"];
$historico = $_POST["historico"];
$cheque = $_POST["cheq"];

$sql = "UPDATE fluxo_caixa SET
    data = '$data',
    tipo = '$tipo',
    valor = '$valor',
    historico = '$historico',
    cheque = $cheque
WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Alteração realizada com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>