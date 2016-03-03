#!/usr/bin/php
<?php
$PREF_FILE="ip.pref";

$userIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
$pref   = str_replace("|","",htmlspecialchars(trim($_POST['pref'])));


$filename=$PREF_FILE;
$file=fopen($filename,"a");
fwrite($file,date("Y-m-d H:i:s")."|".date("D j M, Y g:i a")."|".$userIp."|".$pref."\n");
fclose($file);


?>
