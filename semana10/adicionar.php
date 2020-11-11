<?php
// Cliente NAO PODE NADA
// Gerente pode ver, MAS NAO PODE POSTAR
// Administrador PODE TUDO

session_start();

// https://www.php.net/manual/pt_BR/function.empty.php

if(empty($_SESSION['usuario_logado'])) {
  echo 'USUARIO NAO LOGADO, vá para o login';
  echo '<a href="login.php"> IR PARA LOGIN </a>';


  exit("USUARIO NAO LOGADO");
} else if($_SESSION['tipo_usuario'] == 'cliente') {

  echo 'o perfil de usuário CLIENTE nao pode ter acesso a esta página';
  exit('Falta de permissão');
} 





 ?>

<form action="adicionarBE.php" method="POST">


  <label for="DADO1">Dado1:</label>
  <input name="dado1">

  <label for="DADO2">Dado2:</label>
  <input  name="dados2">

  <input type="submit">



</form>
