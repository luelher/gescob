<?php use_helper ("Grid", "Object"); ?>

<h1>Busqueda de Mororos por fechas de vencimiento</h1>
<br>
<?php echo include_partial('buscarMorosos', array('buscarmorosos' => $buscarmorosos )) ?>

<br>

<?php echo include_partial('enviarSms', array('detallemorosos' => $detallemorosos )) ?>
