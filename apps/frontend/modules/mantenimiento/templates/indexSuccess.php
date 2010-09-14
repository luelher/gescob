<?php use_helper ("Grid", "Object"); ?>

<h1>Información y Procesos de Mantenimiento</h1>
<br>
<br>
<br>
<h2>Bandeja de Salida de SMS:</h2>
<p>Mensajes sin enviar: <?php $criteria = new Criteria(); $criteria->add(OutboxPeer::PROCESSED,false); $contador = OutboxPeer::doCount($criteria); echo ($contador==0) ? '<span style="color: green">0</span>' : '<span style="color: red"> '.$contador.' </span>' ?></p>
<br>
<br>
<h2>Estado del Servicio SMS</h2>
<p>Servicio: <?php if(exec('ps -A | grep smsd')!='') echo '<span style="color: green"> Iniciado </span>'; else echo '<span style="color: red"> Apagado </span>'; ?> </p>
<br>

