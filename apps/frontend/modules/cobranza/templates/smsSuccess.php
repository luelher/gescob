<?php use_helper ("Grid", "Object"); ?>

<h1>Cobranza en base a SMS Entregados</h1>
<br>
<?php echo include_partial('buscarCobrosSms', array('buscarsms' => $buscarsms )) ?>

<br>

<?php echo include_partial('exportar', array('detallecobros' => $detallecobros )) ?>
