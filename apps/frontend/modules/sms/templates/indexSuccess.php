<?php use_helper ("Grid", "Object"); ?>
<h1>Envío de SMS a morosos</h1>
<br>
<h2>Lista de Morosos con 1 Semana de vencidos</h2>
<br>
<?php echo form_tag('sms/buscar','method=get') ?>

Dessde: <?php echo input_date_tag('desde', $desde, 'rich=true'); ?>
<br>
Hasta: <?php echo input_date_tag('hasta', $hasta, 'rich=true'); ?>
<br>
<br>
<?php echo submit_tag('Buscar') ?>
</form>

<br>
<br>

<?php echo form_tag('sms/enviar') ?>

<?php echo grid_tag_v2($obj); ?>
<br>
Cantidad de Clientes: <?php echo $contador ?>
<br>
<br>
<?php echo submit_tag('Enviar SMS') ?>
</form>
