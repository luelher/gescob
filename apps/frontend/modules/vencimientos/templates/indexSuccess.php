<?php use_helper ("Grid", "Object"); ?>

<h1>Cuotas Vencidas</h1>
<br>
<?php echo include_partial('buscarSms', array('buscarsms' => $buscarsms )) ?>

<br>

<?php echo include_partial('exportar', array('detallesms' => $detallesms )) ?>
