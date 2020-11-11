<?php

//Objetivo: Criar uma sequencia interativa e descobrir quais os numeros dessa sequencia serão PRIMOS

$seq = array();

for ($i=0; $i < 11; $i++) {
  $seq[] = $i;
}


echo '<pre>';
var_dump($seq);

$primos = array();
$naoprimos = array();

foreach ($seq as $key => $value) { // Iteração total do array $seq
  for ($i=0; $i < $value; $i++) { // Busca de todos os valores com inicio definido, até o valor iterado $value

    if(isset($seq[$i]) && $seq[$i] != 0) $divisao = $value / $seq[$i]; // Teste para nao dar divisáo por ZERO
    else $divisao = 1; // Retorna um para nao utilizar

    if (is_int($divisao) && $divisao > 1 && $seq[$i] > 1) { // Condicional que verifica se a divisão é um inteiro, se for maior que 1 (pois aí a divisão não é por ele mesmo)
      // e se ele não está dividindo por 1.
      $naoprimos[] = $value; // Adiciona o valor $value no array de nao primos.
      if(isset($seq[$key])) unset($seq[$key]); // DELETA do array inicial, deixando somente os primos;
      break;  // Esse break pois eu nao preciso ficar testando, deu um inteiro, já nao é primo
    }
  }
}

$primos = $seq; // Copio o array para efeitos de semantica

var_dump($naoprimos);
var_dump($primos);

 ?>
