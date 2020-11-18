<?php

function file_top($title = 'SISTEMA 222PW2') {

  $string = '<!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>'.$title.'</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </head>
  <body>
  ';

  return $string;
}


function form_input($name, $label, $type = "text", $id = "noId", $placeholder = '') {

  $string = '<div class="form-group">
  <label for="'.$name.'">'.$label.'</label>
  <input type="'.$type.'" class="form-control" name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'">
  </div>
  ';

  return $string;
}

function file_bottom() {

  $string = '
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
  </html>';


  return $string;

}

function html_table($tableData) {
  global $nomeCampos;
  global $delCampos;
  $numRows = count($tableData);

  if(!isset($delCampos)) $delCampos = array();

  $string = '<table class="table">';

  if(isset($nomeCampos)) {
    $string .= '<tr>';
    foreach ($nomeCampos as $key => $value) {

      $string .= '<th>';
      $string .= $value;
      $string .= '</th>';

    }
    $string .= '</tr>';
  }
  for ($i=0; $i < $numRows ; $i++) {
    $string .= '<tr>';

    foreach ($tableData[$i] as $key => $value) {
      if(array_search($key, $delCampos) === FALSE) {
      $string .= '<td>';
      $string .= $value;
      $string .= '</td>';
    }
 }
    $string .= '</tr>';
  }

  $string .= '</table>';

  return $string;
}


?>
