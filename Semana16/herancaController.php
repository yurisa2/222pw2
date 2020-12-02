<?php

class model
{

  public function conexao() {

    $this->conexao = new mysqli("localhost", "root", "", "bd_locadora", 3306);

  }

  public function set_table($table) {
    $this->nomeTabela = $table;
  }

  public function set_id($colId) {
    $this->colId = $colId;
  }


  public function selectString( $id = NULL ) {

    $stmt = "SELECT * FROM $this->nomeTabela";

    if($id != NULL) $stmt .= " WHERE $this->colId = $id";

    return $stmt;
  }
}

class controller extends model
{

  public function __construct()
  {

    if(!isset($this->nomeTabela) || !isset($this->colId)) {

      exit("Nome da tabela não setado, utilize ->set_table e ->set_id");
    }
  }
}

class view extends controller
{

  

}

$objView = new view;




 ?>
