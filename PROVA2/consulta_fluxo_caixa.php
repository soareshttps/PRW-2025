<?php
include "conexao.php";

$id = $_POST["id"];
$data = $_POST["data"];
$tipo = $_POST["opcao"];
$valor = $_POST["valor"];
$historico = $_POST["historico"];
$cheque = $_POST["cheq"];

if ($id)
{
    $sql = "SELECT FROM fluxo_caixa WHERE id = $id";
    $res = $conn->query($sql);

    if (mysqli_query($conn, $sql))
    {
        if ($tipo == 'entrada')
        {
	        $sql = "select sum(valor) from fluxo_caixa where tipo = 'entrada'";
        }

        else if ($tipo == 'saida')
        {
	        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
        }

        else if ($tipo == 'saldo')
        {
	        $sql = "select sum(case when tipo = 'entrada' then valor else 0 end) - 
	        sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";
        }

      }
    }

?>