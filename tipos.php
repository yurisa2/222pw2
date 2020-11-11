<?php

echo "######################";
echo "<br>";
echo "Variáveis, tipos, conversão";
echo "<br>";
echo "######################";
echo "<br>";

echo "<pre>";
// https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/pre
// Assim eu libero a formatação sem ser através de <br> ou <p>


// O Que é var_dump()
// https://www.php.net/manual/pt_BR/function.var-dump.php

$varInteiro = 222;
var_dump($varInteiro);

// $varStringComInteiro = "222,45"; // Isso vai ser uma string após a virgula
// $varStringComInteiro = "222pwpwpwpwpwp"; // Isso vai ser uma string
$varStringComInteiro = "222"; // Isso vai ser uma string
var_dump($varStringComInteiro);

// https://www.php.net/manual/pt_BR/function.error-reporting.php
// Tipos de erro, e como manipular e ler
$somaEstranha = $varInteiro + $varStringComInteiro;
var_dump($somaEstranha);


echo "<br>";
echo "<br>";
echo "######################";
echo "<br>";
echo "Conversão";
echo "<br>";
echo "######################";
echo "<br>";

$varUnica = 147822;
var_dump($varUnica);


// Aqui é feita a conversão de um INTEIRO para uam string
// DOC https://www.php.net/manual/pt_BR/language.types.type-juggling.php
// (int), (integer) - molde para inteiro
// (bool), (boolean) - converte para booleano
// (float), (double), (real) - converte para número de ponto flutuante
// (string) - converte para string
// (array) - converte para array
// (object) - converte para objeto


$varUnica = (string)$varUnica;
var_dump($varUnica);


// Tomar cuidado com conversões NUMERO -> BOOL
$varUnica = (bool)$varUnica;
var_dump($varUnica);
echo "<i>Aqui ele converte para true pois é maior que zero, se fosse exatamente zero, seria false, TESTE COM O CODIGO</i>";

echo "<br>";
echo "<br>";
echo "######################";
echo "<br>";
echo "BOOL";
echo "<br>";
echo "######################";
echo "<br>";


// Jeito certo de atribuir uma variável BOOL
// Em linhas gerais os valores TRUE e FALSE podem ser tratados como 1 e 0, respectivamente
$verdadeiro = TRUE; // ele vai aceitar minusculo tbm
$falso = FALSE; // ele vai aceitar minusculo tbm
var_dump($verdadeiro);
var_dump($falso);


 ?>
