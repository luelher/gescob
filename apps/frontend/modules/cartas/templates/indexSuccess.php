<h1>Registrar Cartas Entregadas</h1>
<br>
<?php use_helper('Javascript','Object') ?>
<?php echo form_remote_tag(array(
    'update'   => 'resultado',
    'url'      => 'cartas/insertar',
    'position' => 'after',
)) ?>
  <?php echo $insertarcarta ?>

  <?php echo submit_tag('Insertar') ?>
</form>
  <br>
<div id="resultado"></div>