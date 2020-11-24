<?php
include_once("operacoes.php");
include_once("conexao.php");


if(isset($_GET['tabela'])) $tabela = $_GET['tabela']; // Medida de segurança
else exit("Parametro Tabela Faltando");  // Alerta educado, pode ser removido para evitar XSS

$id = $_GET['id'];

if($tabela == "tb_automovel") include_once("tabelaAutomovel.php");
elseif($tabela == "tb_cargo") include_once("tabelaCargo.php");
elseif($tabela == "tb_cliente") include_once("tabelaCliente.php");
elseif($tabela == "tb_funcionario") include_once("tabelaFuncionario.php");
elseif($tabela == "tb_locacao") include_once("tabelaLocacao.php");
elseif($tabela == "tb_marca") include_once("tabelaMarca.php");
elseif($tabela == "tb_modelo") include_once("tabelaModelo.php");
else exit("Nenhuma Tabela encontrada");


$mysqli->query(deleteString($id));




 ?>
