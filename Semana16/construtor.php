<?php

/**
 *
 */
class ObjetoSimples
{

  public function __construct() {

    echo "Objeto instanciado com sucesso";

    $rand1 = rand();
    $rand2 = rand();
    $rand3 = rand();

    $this->soma($rand1,$rand2,$rand3);

  }

  public function soma($um, $dois, $tres) {
    $retorno = $um + $dois + $tres;

    $this->resultadoSoma = $retorno;
  }

}

$instObj = new ObjetoSimples;

var_dump($instObj);

?>
