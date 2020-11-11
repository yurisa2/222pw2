<?php



if(isset($_POST['nota'])) {

  echo "Nota escolhida foi: " . $_POST['nota'];

} else {



$num = $_POST['numerodeopcoes'];
$formSelect = '<form class="" action="semana7c.php" method="post">

<select name="nota">';

for ($i=1; $i <= $num; $i++) {
  $formSelect .= ' <option value='.$i.'>'.$i.'</option>';
}

$formSelect .= '</select>

<input type="submit"> <br>


</form>

';

echo $formSelect;

}

 ?>
