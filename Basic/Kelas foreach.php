<?php
class human
{
  public $namadepan;
  public $namabelakang;
  public $namatengah;
  public function __construct($namadepan,$namabelakang,$namatengah){
    $this ->namadepan =$namadepan;
    $this->namatengah=$namatengah;
    $this ->namabelakang =$namabelakang;
  }
  
}
$stevanus = new human('Stevanus','Andika','Galih');

foreach ($stevanus as $data=>$saya){
  echo $data .':'.$saya.'<br>';
}