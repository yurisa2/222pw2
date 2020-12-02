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

$objConex = new model;
$objConex->set_table("tb_cargo");
$objConex->set_id("TB_CARGO_ID");


var_dump($objConex->selectString(15));

 ?>
