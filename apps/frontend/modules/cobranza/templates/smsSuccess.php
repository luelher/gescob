<?php use_helper ("Grid", "Object"); ?>

<h1>Cobranza en base a Cartas Entregadas</h1>
<br>
<?php echo include_partial('buscarCobros', array('buscarcobros' => $buscarcobros )) ?>

<br>

<?php echo include_partial('exportar', array('detallecobros' => $detallecobros )) ?>
