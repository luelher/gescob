<?php use_helper ("Grid", "Object"); ?>

<h1>Resumen de Efectividad de la Cobranza</h1>
<br>
<br>
<?php echo link_to('Por Cartas Entregadas', 'cobranza/cartas'); ?>
<br>
<br>
<?php echo link_to('Por Mensajes (SMS) entregados', 'cobranza/sms'); ?>
<br>
<br>
<h1>Pagos</h1>
<br>
<br>
<?php echo link_to('Frecuencia de Pagos por Cliente', 'cobranza/frecuencia'); ?>
