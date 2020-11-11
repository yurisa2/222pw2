<?php
// Aqui todo mundo pode entrar
// var_dump($_POST);

if(!empty($_POST)) {

  $dados = $_POST;
  if($dados['user'] == 'yurisa2' && $dados['pw'] == '1234') {
    echo 'LOGADO como ' . $dados['user'] . ' dados adicionados na session';
    session_start();
    $_SESSION['usuario_logado'] = $dados['user'];
    $_SESSION['tipo_usuario'] = 'cliente';

    echo '<a href="listar.php"> IR PARA LISTAR </a>';
  }
  else if($dados['user'] == 'gerente' && $dados['pw'] == '1234') {
    echo 'LOGADO como ' . $dados['user'] . ' dados adicionados na session';
    session_start();
    $_SESSION['usuario_logado'] = $dados['user'];
    $_SESSION['tipo_usuario'] = 'gerente';

    echo '<a href="adicionar.php"> IR PARA Adicionar </a>';
  }

}

?>
<form action="" method="POST">

<label for="user">Usuário:</label>
<input name="user">

<label for="pw">Password:</label>
<input type="password" name="pw">

<input type="submit">
</form>
