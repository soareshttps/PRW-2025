<?php
include "conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM fluxo_caixa WHERE id = $id";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
?>

<form action="altera_fluxo_caixa_exe.php" method="post">
  <input type="hidden" name="id" value="<?= $row["id"] ?>">
  <label for="data">Data: </label>
  <input type="date" name="data" id="data" value="<?= $row["data"] ?>">
  <br>

  <label for="">Tipo: </label>
    <input type="radio" name="opcao" value="Entrada" id="1">
    <label for="entrada">Entrada</label>
    <input type="radio" name="opcao" value="Saída" id="2">
    <label for="saida">Saída</label>
    <br>

  <label for="marc">Valor: </label> 
  <input type="number" name="valor" id="valor" value="<?= $row["valor"] ?>">
  <br>

  <label for="mod">Historico: </label>
  <input type="text" name="historico" id="historico" value="<?= $row["historico"] ?>">
  <br>
  
  <label for="cheq">Cheque: </label>
  <select name="cheq" id="cheq">
    <option value="1" <?= $row["cheque"] ? "selected" : "" ?>>Sim</option>
    <option value="0" <?= !$row["cheque"] ? "selected" : "" ?>>Não</option>
  </select><br>
  
  <input type="submit" value="Alterar">
</form>