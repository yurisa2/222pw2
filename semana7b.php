<?php



if(isset($_POST['opcao'])) {
  echo "Voce escolheu " . $_POST['opcao'] . " das opcoes DINAMICAS";
} else {

  $op1 = $_POST['opcao1'];
  $op2 = $_POST['opcao2'];
  $op3 = $_POST['opcao3'];
  $op4 = $_POST['opcao4'];

echo '
<form class="" action="semana7b.php" method="post">

<select name="opcao">
 <option value='.$op1.'>'.$op1.'</option>
 <option value='.$op2.'>'.$op2.'</option>
 <option value='.$op3.'>'.$op3.'</option>
 <option value='.$op4.'>'.$op4.'</option>
</select>

<input type="submit"> <br>


</form>

';}



 ?>
