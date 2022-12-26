<?php
/*
Static variabel adalah jenis variabel yang mempertahankan nilainya pada setiap pemanggilan function. Ini berbeda dengan variabel normal yang nilainya secara otomatis akan di-reset setelah dijalankan.
*/
function ulang(){
  static $a= 5;
  echo $a;
  $a++;
}
ulang();
ulang();
ulang();
ulang();
ulang();
ulang();
?>