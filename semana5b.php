<!DOCTYPE html>
<html>
<head>
<title>Formulário para o cálculo do DELTA de Bhaskara</title>
</head>

<body>
ALERTA, a fórmula é RAIZ(B<sup>2</sup> - 4 . a . c )<br>
Portanto, devemos fazer com que B<sup>2</sup> seja maior que o segundo elemento<br>



<form action="" method="POST">
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

$a_valor = $_POST["Avar"];
$b_valor = $_POST["Bvar"];
$c_valor = $_POST["Cvar"];


$delta = ($b_valor ** 2) - (4 * $a_valor * $c_valor);
// Esse exemplo calcula o DELTA na mesma linha, tudo de uma vez.



echo "Entrada a: " . $a_valor . " | Entrada b: " . $b_valor . " | Entrada c: " . $c_valor;
echo "<br>";
echo "O delta calculado (Sem Raíz quadrada) é: " . $delta;
echo "<br>";
echo "O delta calculado (COM Raíz quadrada) é: " . sqrt($delta);
// Aqui temos um exemplo de como rodar a raiz quadrada sem dar pau, pois tem um aviso lá em cima
echo "<br>";


 ?>
