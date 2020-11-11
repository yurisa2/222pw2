<?php
// https://www.php.net/manual/pt_BR/mysqli.quickstart.connections.php



$mysqli = new mysqli("localhost", "root", "", "bd_locadora", 3306);

echo '<pre>';

//https://www.php.net/manual/pt_BR/mysqli.quickstart.statements.
// Objeto de conexão
$res = $mysqli->query("SELECT * FROM tb_cliente");

// var_dump($res);


echo '<br>###<br>---';


// var_dump($res->fetch_assoc());

echo '<br>###<br>---';


for ($i=0; $i < $res->num_rows ; $i++) {
  var_dump($res->fetch_assoc());
}



echo '<br>###<br>---';

$res = $mysqli->query("
  INSERT INTO tb_cliente
    (TB_CLIENTE_NOME,
    TB_CLIENTE_TEL,
    TB_CLIENTE_SEXO,
    TB_CLIENTE_EMAIL,
    TB_CLIENTE_SENHA,
    TB_CLIENTE_ENDERECO,
    TB_CLIENTE_COMPLEMENTO,
    TB_CLIENTE_BAIRRO,
    TB_CLIENTE_CIDADE,
    TB_CLIENTE_UF,
    TB_CLIENTE_DT_NASC,
    TB_CLIENTE_DT_CAD)
    VALUES
    ('TB_CLIENTE_NOME',
    'TB_CLIENTE_TEL',
    'TB_CLIENTE_SEXO',
    'TB_CLIENTE_EMAIL',
    'TB_CLIENTE_SENHA',
    'TB_CLIENTE_ENDERECO',
    'TB_CLIENTE_COMPLEMENTO',
    'TB_CLIENTE_BAIRRO',
    'TB_CLIENTE_CIDADE',
    'SP',
    '2020-09-10',
    '2020-09-10'
    )
");

if($res == FALSE) {var_dump($mysqli->error); }

var_dump($res);


echo '<br>###<br>---';


for ($i=0; $i < 3; $i++) {

  $res = $mysqli->query("
    INSERT INTO tb_cliente
      (TB_CLIENTE_NOME,
      TB_CLIENTE_TEL,
      TB_CLIENTE_SEXO,
      TB_CLIENTE_EMAIL,
      TB_CLIENTE_SENHA,
      TB_CLIENTE_ENDERECO,
      TB_CLIENTE_COMPLEMENTO,
      TB_CLIENTE_BAIRRO,
      TB_CLIENTE_CIDADE,
      TB_CLIENTE_UF,
      TB_CLIENTE_DT_NASC,
      TB_CLIENTE_DT_CAD)
      VALUES
      ('".rand(0,99999999999)."',
      '".rand(0,99999999999)."',
      '".rand(0,99999999999)."',
      '".rand(0,99999999999)."',
      '".rand(0,99999999999)."',
      '".rand(0,99999999999)."',
      '".rand(0,99999999999)."',
      '".rand(0,99999999999)."',
      '".rand(0,99999999999)."',
      'SP',
      '2020-09-10',
      '2020-09-10'
      )
  ");
  if($res == FALSE) {

    var_dump($mysqli->error);
    break;
  }

}

$res = $mysqli->query("update tb_cliente set TB_CLIENTE_TEL = '123456789' where TB_CLIENTE_DT_CAD = '2020-09-10'");

var_dump($res);



// AGORA PARA FECHAR O DELETE


$res = $mysqli->query("delete from tb_cliente where TB_CLIENTE_DT_CAD = '2020-09-10'");

var_dump($res);



 ?>
