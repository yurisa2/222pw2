<?php

//
// echo '<pre>';
// var_dump($_POST);

$tempraturaInput = $_POST['temperatura'];
$seletorTemp = $_POST['seletorTemp'];
$veiculo = $_POST['veiculo'];

echo "Sua percepção de temperatura é $tempraturaInput";


if($seletorTemp == "quente" && $veiculo == "fusca")  echo "Você vai passar bastante calor";
else if($seletorTemp == "frio" && $veiculo == "fusca")  echo "Você vai ficar de boas";
else if($seletorTemp == "medio" )  echo "Você vai ficar médio";
// else if($seletorTemp == "quente" && $veiculo == "mobila")  echo "Mobila e calor, tudo haver";
else if($seletorTemp == "frio" && $veiculo == "mobila")  echo "Mobila no frio nem liga direito, voce passará frio";
else if($veiculo == "mercedes")  echo "De mercedes tanto faz, liga o A/C e tá de boas";
else echo "Nao sei o que dizer";

 ?>
