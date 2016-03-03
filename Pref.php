<?php
Class Pref{
  private $timestamp;
  private $ip, $pref;
  private function partial_explode($string){
    return explode("|",$string);
  }
  public function __construct($line){
    $data=$this->partial_explode($line);//[0]:timestamp, [1]:timestamp for human, [2]:ip, [3]:pref
    $this->timestamp= $data[0];
    $this->ip       = $data[2];
    $this->pref     = $data[3];
  }
  public function getIp(){
    return $this->ip;
  }
  public function getPref(){
    return $this->pref;
  }
}
?>
