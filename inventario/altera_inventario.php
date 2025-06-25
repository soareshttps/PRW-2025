<?php
include "conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM inventario_computadores WHERE id = $id";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
?>

<form action="altera_inventario_exe.php" method="post">
  <input type="hidden" name="id" value="<?= $row["id"] ?>">
  Código Patrimônio: <input type="text" name="cod" value="<?= $row["codigo_patrimonio"] ?>"><br>
  Descrição: <input type="text" name="desc" value="<?= $row["descricao"] ?>"><br>
  Marca: <input type="text" name="marca" value="<?= $row["marca"] ?>"><br>
  Modelo: <input type="text" name="modelo" value="<?= $row["modelo"] ?>"><br>
  Armazenamento: <input type="number" name="arma" value="<?= $row["armazenamento"] ?>"><br>
  Memória: <input type="number" name="mem" value="<?= $row["memoria"] ?>"><br>
  Processador: <input type="text" name="proc" value="<?= $row["processador"] ?>"><br>
  
  Possui Placa de Vídeo: 
  <select name="plv">
    <option value="1" <?= $row["possui_placa_video"] ? "selected" : "" ?>>Sim</option>
    <option value="0" <?= !$row["possui_placa_video"] ? "selected" : "" ?>>Não</option>
  </select><br>
  
  Descrição da Placa: <input type="text" name="descplv" value="<?= $row["placa_video"] ?>"><br>
  Sistema Operacional: <input type="text" name="so" value="<?= $row["sistema_operacional"] ?>"><br>
  <input type="submit" value="Alterar">
</form>