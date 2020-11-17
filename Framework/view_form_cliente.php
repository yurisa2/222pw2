<?php

include_once "op_frontend.php";

echo file_top("Nova New Novissima ESTALANDO View Cliente");

?>

  <form class="col-md-6" action="backendCliente.php" method="POST">


    <?php echo form_input('TB_CLIENTE_NOME', 'Nome NOVO BACKEND'); ?>
    <?php echo form_input('TB_CLIENTE_EMAIL', 'Email','','','exemplo@asdf.com'); ?>
    <?php echo form_input('TB_CLIENTE_SENHA', 'Senha','password'); ?>
    <?php echo form_input('TB_CLIENTE_ENDERECO', 'Endereço'); ?>
    <?php echo form_input('TB_CLIENTE_CIDADE', 'Cidade'); ?>


      <button type="submit" class="btn btn-primary mb-2">Salvar</button>

  </form>



<?php echo file_bottom(); ?>
