<?php


function insertString($entrada) {

    global $nomeTabela;

        $auto_stmt_col = array();
        $auto_stmt_val = array();


        foreach ($entrada as $key => $value) {
                $auto_stmt_col[] = $key;
                $auto_stmt_val[] = $value;
        }


        $stmt_final = "insert into $nomeTabela (";


        for ($i=0; $i < count($auto_stmt_col); $i++) {
                $stmt_final .= $auto_stmt_col[$i] . ", ";

        }

        $stmt_final = substr($stmt_final, 0, -2);

        $stmt_final .= ")
                values
                (";


                for ($i=0; $i < count($auto_stmt_val); $i++) {
                        $stmt_final .= "'" . $auto_stmt_val[$i] . "', ";

                }

                $stmt_final = substr($stmt_final, 0, -2);

                $stmt_final .= ")";

        return $stmt_final;
}

function deleteString($id) {

  global $nomeTabela;
  global $colId;

  $stmt = "DELETE FROM $nomeTabela WHERE $colId = $id";

  return $stmt;
}



function updateString($entrada, $id) {

    global $nomeTabela;
    global $colId;


        $auto_stmt_col = array();
        $auto_stmt_val = array();


        foreach ($entrada as $key => $value) {
                $auto_stmt_col[] = $key;
                $auto_stmt_val[] = $value;
        }


        $stmt_final = "update $nomeTabela set ";


        for ($i=0; $i < count($auto_stmt_col); $i++) {
                $stmt_final .= $auto_stmt_col[$i] . " = '" . $auto_stmt_val[$i] . "', ";

        }

        $stmt_final = substr($stmt_final, 0, -2); // Remover os dois ultimos caracteres para náo quebrar o MySQL


        $stmt_final .= " where $colId = $id";

        return $stmt_final;
}

function selectString( $id = NULL ) {

  global $nomeTabela;
  global $colId;

  $stmt = "SELECT * FROM $nomeTabela";

  if($id != NULL) $stmt .= " WHERE $colId = $id";

  return $stmt;
}


 ?>
