<?php use_helper('Javascript','Object') ?>
<div id="<?php if($error) echo 'error'; else echo 'msj'; ?>"><?php echo $mensaje ?></div>
<br>

<?php echo javascript_tag("
  $('cartas_cedula').value='';
  $('cartas_cedula').focus();

  ") ?>