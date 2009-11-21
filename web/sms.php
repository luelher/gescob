<?php

   $msj = $_GET['msj'];

   $sms = fopen('/home/luelher/sms/prueba','x');
   fwrite($sms,"+584245558074\n");
   fwrite($sms,$msj);
   fclose($sms);

?>

