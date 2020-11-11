<?php

session_start();
session_destroy();
session_commit();

//https://www.php.net/manual/pt_BR/function.session-destroy

echo '<pre>';
var_dump($_SESSION);



 ?>
