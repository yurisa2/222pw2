<?php
echo "<pre>";
echo "<br>";
echo "######################";
echo "<br>";
echo "Atividade 1";
echo "<br>";
echo "######################";
echo "<br>";


echo '
<form class="" action="" method="post">
  <label for="Valor1">Valor</label>
  <input type="text" name="Valor1" value="">
  <label for="Valor2">Valor2</label>
  <input type="text" name="Valor2" value="">

  <input type="submit">

';
if(is_numeric($_POST['Valor1']) && is_numeric($_POST['Valor2'])) {
$soma = $_POST['Valor1'] + $_POST['Valor2'];
$subtr = $_POST['Valor1'] - $_POST['Valor2'];
$multip = $_POST['Valor1'] * $_POST['Valor2'];
$divis = $_POST['Valor1'] / $_POST['Valor2'];
$pote = pow($_POST['Valor1'], $_POST['Valor2']);

var_dump($soma);
var_dump($subtr);
var_dump($multip);
var_dump($divis);
var_dump($pote);
}

echo "<br>";
echo "######################";
echo "<br>";
echo "Atividade 2";
echo "<br>";
echo "######################";
echo "<br>";

$varA = 10;
$varB = 20;

$varTemp = $varA; // Aqui varTemp fica identica a varA

$varA = $varB;
$varB = $varTemp;

var_dump($varA);
var_dump($varB);


echo "<br>";
echo "######################";
echo "<br>";
echo "Atividade 3";
echo "<br>";
echo "######################";
echo "<br>";

echo '
<form class="" action="" method="post">
  <label for="Nota1">Nota</label>
  <input type="text" name="Nota1" value="">
  <label for="Nota2">Nota2</label>
  <input type="text" name="Nota2" value="">
  <label for="Nota3">Nota3</label>
  <input type="text" name="Nota3" value="">

  <input type="submit">

';

if(is_numeric($_POST['Nota1']) && is_numeric($_POST['Nota2']) && is_numeric($_POST['Nota3'])) {

$notas = $_POST;
$notaFinal = (($notas['Nota1']*2) + ($notas['Nota2']*3) + ($notas['Nota3']*5)) /10;

var_dump($notaFinal);
}

echo "<br>";
echo "######################";
echo "<br>";
echo "Atividade 4";
echo "<br>";
echo "######################";
echo "<br>";


echo '
<form class="" action="" method="post">
  <label for="custoFabrica">Custo da fabrica</label>
  <input type="text" name="custoFabrica" value="">

  <input type="submit">

';

$custoFabrica = $_POST['custoFabrica'];
$custoFabricaImpostos = $custoFabrica * 1.45;

$comissaoDist = $custoFabricaImpostos * 1.28; // Aqui entra a discussão se os impostos entram na conta do distribuidor ou não;
$custFinal = $comissaoDist;

// OUTRO JEITO DE FAZER
// $custFinal =( $custoFabrica * 0.28) + $custoFabricaImpostos;


var_dump($custFinal);


echo "<br>";
echo "######################";
echo "<br>";
echo "Atividade 5";
echo "<br>";
echo "######################";
echo "<br>";


echo '
<form class="" action="" method="post">
  <label for="Metros">Metros</label>
  <input type="text" name="Metros" value="">

  <input type="submit">

';

var_dump($_POST['Metros'] * 100);



echo "<br>";
echo "######################";
echo "<br>";
echo "Atividade 6";
echo "<br>";
echo "######################";
echo "<br>";

echo '
<form class="" action="" method="post">
  <label for="RaioCirculo">Raio do Circulo</label>
  <input type="text" name="RaioCirculo" value="">

  <input type="submit">

';
var_dump($_POST['RaioCirculo']*$_POST['RaioCirculo'] * pi());


 ?>
