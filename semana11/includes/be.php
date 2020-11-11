<?php

$dados = $_POST;

var_dump($_POST);

$json_dados = json_encode($dados);

file_put_contents('database.json', $json_dados, FILE_APPEND);

 ?>
