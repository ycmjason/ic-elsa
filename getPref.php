#!/usr/bin/php
<?php
require("./Pref.php");
$userIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
$lines=file("./ip.pref");
foreach($lines as $line){
  $temp = new Pref($line);
  if($temp->getIp()==$userIp){
    $pref = new Pref($line);
  }
}
echo $pref->getPref();
?>
