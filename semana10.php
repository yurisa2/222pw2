<?php
echo "<pre>";

echo "######################";
echo "<br>";
echo "Escopo de Variáveis (nome)";
echo "<br>";
echo "######################";
echo "<br>";


$a = 35;
$b = 99;

$resultado = 300;


function soma($a, $b) {
  $resultado = $a + $b;

  return $resultado;
}



var_dump(soma(5,pi()));
// var_dump($a);
// var_dump($b);
// var_dump($resultado);

echo "<br>";
echo "<br>";
echo "######################";
echo "<br>";
echo "Alterando variáveis de escopos diferentes";
echo "<br>";
echo "######################";
echo "<br>";

$minus_a = 12;
$minus_b = 58;

function subtracao() {
  global $minus_a; // Falo para o escopo local que $minus_a é do escopo GLOBAL, ou seja GLOBAL -> LOCAL
  global $minus_b;

  global $res_minus; // Falo que $res_minus está sendo gerado no local para o GLOBAL, ou seja LOCAL -> GLOBAL


  $res_minus = $minus_a - $minus_b;


  echo "ESCOPO LOCAL: ";
  var_dump($res_minus);

}

subtracao();

echo "ESCOPO GLOBAL: ";
var_dump($res_minus); // Essa variável foi criada DENTRO do escopo local da funcao subtracao()

 ?>
