<?php

/**
 *
 */
class ObjetoSimples
{

  public function soma($um, $dois, $tres) {
    $retorno = $um + $dois + $tres;

    return $retorno;
  }

}

class ObjetoMaisSimples
{

  public function soma($um, $dois) {
    $retorno = $um + $dois;

     $this->resultadoSoma = $retorno;
  }

}

$objetoNaMemoria = new ObjetoSimples; // Instanciando objeto na memória (deixa de ser uma classe e se torna um objeto ATIVO)



$objetoMaisSimplesNaMemoria = new ObjetoMaisSimples; // Instanciando o objeto MAIS SIMPLES na memória, ao mesmo tempo do outro


var_dump($objetoNaMemoria->soma(22,33,44));


// var_dump($objetoMaisSimplesNaMemoria->soma(22,33)); // Comentando em FAvor da evolução da conversa

$objetoMaisSimplesNaMemoria->soma(22,33); // Executando método que guarda o resultado na property


var_dump($objetoMaisSimplesNaMemoria); // Vendo objeto por dentro

// Acessando Property.

echo $objetoMaisSimplesNaMemoria->resultadoSoma;



?>
