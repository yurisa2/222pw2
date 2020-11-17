<?php

include_once("operacoes.php");
include_once("conexao.php");
include_once("tabelaCliente.php");



echo '<pre>';
// var_dump($_POST);

// $string = insertString($_POST);

$string = updateString($_POST, 456);


var_dump($string);



 ?>
