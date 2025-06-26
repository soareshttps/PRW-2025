<?php
include "conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM inventario_computadores WHERE id = $id";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
?>

<form action="altera_inventario_exe.php" method="post">
  <input type="hidden" name="id" value="<?= $row["id"] ?>">
  <label for="cod">Código Patrimônio: </label>
  <input type="text" name="codpatrimonio" id="cod" value="<?= $row["codigo_patrimonio"] ?>"><br>

  <label for="descricao"></label>
  <input type="text" name="descricao" id="desc" value="<?= $row["descricao"] ?>"><br>

  <label for="marc">Marca:</label> 
  <input type="text" name="marca" id="marc" value="<?= $row["marca"] ?>"><br>

  <label for="mod">Modelo:</label>
  <input type="text" name="modelo" id="mod" value="<?= $row["modelo"] ?>"><br>

  <label for="arm">Armazenamento: </label>
  <input type="number" name="armazenamento" id="arm" value="<?= $row["armazenamento"] ?>"><br>

  <label for="mem">Memória: </label>
  <input type="number" name="memoria" id="mem" value="<?= $row["memoria"] ?>"><br>

  <label for="proc">Processador: </label>
  <input type="text" name="processador" id="proc" value="<?= $row["processador"] ?>"><br>
  
  <label for="pp">Possui Placa de Vídeo: </label>
  <select name="possuiPlaca" id="pp">
    <option value="1" <?= $row["possui_placa_video"] ? "selected" : "" ?>>Sim</option>
    <option value="0" <?= !$row["possui_placa_video"] ? "selected" : "" ?>>Não</option>
  </select><br>
  
  Descrição da Placa: <input type="text" name="placavideo" value="<?= $row["placa_video"] ?>"><br>
  Sistema Operacional: <input type="text" name="sistemaop" value="<?= $row["sistema_operacional"] ?>"><br>
  <input type="submit" value="Alterar">
</form>