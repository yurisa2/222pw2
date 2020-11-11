<!DOCTYPE html>
<html>
<head>
<title>Formulário para o cálculo do DELTA de Bhaskara</title>
</head>

<body>

<form action="" method="GET">
  <label for="Avar">Entrada A:</label>
  <input type="text" id="Avar" name="Avar"><br><br>

  <label for="Bvar">Entrada b:</label>
  <input type="text" id="Bvar" name="Bvar"><br><br>

  <label for="Cvar">Entrada C:</label>
  <input type="text" id="Cvar" name="Cvar"><br><br>


  <input type="submit" value="Envia">
</form>

</body>

</html>


<?php

$a_valor = $_GET["Avar"];
$b_valor = $_GET["Bvar"];
$c_valor = $_GET["Cvar"];

// $b_quad = $b_valor * $b_valor; // OK
// $b_quad = $b_valor ** 2; // TBM ok https://www.php.net/manual/pt_BR/function.pow.php
$b_quad = pow($b_valor, 2); // TBM ok https://www.php.net/manual/pt_BR/function.pow.php

$segundo_elemento = 4 * $a_valor * $c_valor ;
// Estou fazendo as contas separadas pois fica mais fácil de organizar e de
// fazer o código, também não preciso me preocupar com nenhum tipo de () para
// priorizar qual conta fazer primeiro (Agrupamento)

$delta = $b_quad - $segundo_elemento;

echo "Entrada a: " . $a_valor . " | Entrada b: " . $b_valor . " | Entrada c: " . $c_valor;
echo "<br>";
echo "O delta calculado (Sem Raíz quadrada) é: " . $delta;

 ?>
