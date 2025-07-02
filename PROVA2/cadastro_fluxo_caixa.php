<?php
include "conexao.php";

$data = $_POST["data"];
$tipo = $_POST["opcao"];
$valor = $_POST["valor"];
$historico = $_POST["historico"];
$cheque = $_POST["cheq"];

$sql = "INSERT INTO fluxo_caixa
(data, tipo, valor, historico, cheque)
VALUES ('$data', '$tipo', '$valor', '$historico', '$cheque')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>