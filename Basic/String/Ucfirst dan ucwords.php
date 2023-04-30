<?php

$string1 = "contoh string untuk ucfirst";
$string2 = "contoh string untuk ucwords";

// ucfirst
$ucfirst_string = ucfirst($string1);
echo "ucfirst string: " . $ucfirst_string . "<br>";

// ucwords
$ucwords_string = ucwords($string2);
echo "ucwords string: " . $ucwords_string . "<br>";
/*
ucfirst() digunakan untuk mengubah karakter pertama dari sebuah string menjadi huruf kapital.
ucwords() digunakan untuk mengubah setiap karakter pertama dari setiap kata dalam sebuah string menjadi huruf kapital.
*/
?>
