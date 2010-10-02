<?php use_helper ("Grid", "Object"); ?>

<h1>Dias Transcurrido entre el ultimo y penultimo pago</h1>
<br>
<?php echo include_partial('buscarFrecuenciasPagos', array('buscarfrecuencias' => $buscarpagos )) ?>

<br>

<?php echo include_partial('exportar', array('detallecobros' => $detallepagos )) ?>
