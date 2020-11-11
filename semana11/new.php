<?php
include 'includes/head.php';
include 'includes/end.php';
include 'includes/form_element.php';

?>

<?php echo head('Formulário de cadastro'); ?>

        <div class="container">
          <div class="py-5 text-center">
            <h2>Cadastro Cliente</h2>
            <p class="lead">Exemplo de criacao com formulário.</p>
          </div>

          <div class="row">

            <div class="col-md-8 order-md-1">
              <h4 class="mb-3">Dados</h4>
              <form class="needs-validation" validate action="includes/be.php" method="POST">

                <?php echo form_element("Nome", "text"); ?>
                <?php echo form_element("RG", "number"); ?>
                <?php echo form_element("Email", "email"); ?>
                <?php echo form_element("Cidade", "text"); ?>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar</button>

              </form>
            </div>
          </div>

          <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2020 Etec Cotia (222) - 2o TDT</p>
          </footer>
        </div>
<?php print_end(); ?>
