<?php

   $msj = $_GET['msj'];
   $cel = $_GET['cel'];

   $sms = fopen('/home/luelher/sms/'.rand(1,100000),'x');
   fwrite($sms,"+".$cel."\n");
   fwrite($sms,$msj);
   fclose($sms);

?>

