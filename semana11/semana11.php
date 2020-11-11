<?php

echo '<pre>';
var_dump($_POST);
// Não adianta ler o array POST, ele envia os dados via FILES
// https://www.php.net/manual/pt_BR/features.file-upload.post-method.php


echo "ARRAY DE ARQUIVOS";

var_dump($_FILES); // Mostra o array enviado, é importante observar que o índice é o NAME do HTML->FORM

echo '</pre>';

$arquivo = $_FILES['myfile']['tmp_name']; // Nome do arquivo ENVIADO (depois do upload, na pasta TEMP)
$destino = 'uploads/'.time().'-'.$_FILES['myfile']['name'].'.yuri'; // NOME QUE EU ESCOLHO

$retorno = move_uploaded_file($arquivo, $destino);



 ?>

<form action="" method="post" enctype="multipart/form-data">

  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile">

  <input type="submit">
</form>
