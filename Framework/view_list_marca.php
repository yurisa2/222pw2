<?php
include 'conexao.php';
include 'op_frontend.php';
include 'operacoes.php';
include 'tabelaMarca.php';

echo file_top("Listar Clientes");

$res = $mysqli->query(selectString());

$tableData = $res->fetch_all(MYSQLI_ASSOC);

echo html_table($tableData, $nomeTabela);;

echo file_bottom();

?>
