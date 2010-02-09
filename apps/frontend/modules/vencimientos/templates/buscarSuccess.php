<?php use_helper ("Grid", "Object"); ?>

<?php echo include_partial('buscarSms', array('buscarsms' => $buscarsms )) ?>

<br>

<?php echo include_partial('exportar', array('detallesms' => $detallesms )) ?>
