<?php use_helper ("Grid", "Object"); ?>

<?php echo include_partial('buscarMorosos', array('buscarmorosos' => $buscarmorosos )) ?>

<br>

<?php echo include_partial('enviarSms', array('detallemorosos' => $detallemorosos )) ?>
