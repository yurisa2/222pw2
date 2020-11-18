<?php
include 'conexao.php';
include 'op_frontend.php';
include 'tabelaCargo.php';

echo file_top("Listar Clientes");

$res = $mysqli->query("select * from $nomeTabela");
$tableData = $res->fetch_all(MYSQLI_ASSOC);

echo html_table($tableData);

echo file_bottom();

?>
