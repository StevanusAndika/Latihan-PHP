<?php
$a=100;
$b=70;
/*
Perintah global membuat kode di dalam function tes() bisa mengakses variabel yang di definisikan di luar function. Dan begitu pula sebaliknya, 
*/
function tes(){
  global $a,$b;
  $b = $a +$b;
  
}
tes();

echo "hasil variabel $a +$b = $c";
echo $b;
?>