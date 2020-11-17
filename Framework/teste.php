<?php

include 'conexao.php';
include 'op_frontend.php';
include 'tabelaModelo.php';

$res = $mysqli->query("select * from $nomeTabela");


// echo '<pre>';
// var_dump($res->fetch_all(MYSQLI_ASSOC));
// exit;

$tableData = $res->fetch_all(MYSQLI_ASSOC);





echo html_table($tableData);

 ?>
