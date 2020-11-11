<?php


function separador() {

  echo "<br>";
  echo "######################";
  echo "<br>";

}


function separador_adv($texto = "") {

  echo "<br>";
  echo "######################";
  echo "<br>";
  echo $texto;
  echo "<br>";
  echo "######################";
  echo "<br>";

}

function separador_masterBLASTER($texto = "", $texto2 = "") {

  echo "<br>";
  echo "######################";
  echo "<br>";
  echo $texto;
  echo "<br>";
  echo "######################";
  echo "<br>";
  echo $texto2;

}

function eh_primo($entrada) {

  for ($i=2; $i < $entrada; $i++) { // Busca de todos os valores com inicio definido, até o valor iterado $entrada

    if($entrada % $i == 0) return "NAO PRIMO";

  }

  return "PRIMO";

}


?>
