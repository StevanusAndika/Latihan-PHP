<?php

$string = "  Contoh string dengan spasi ekstra di awal dan akhir.   ";

// trim
$trimmed_string = trim($string);
echo "Trimmed string: " . $trimmed_string . "<br>";

// ltrim
$left_trimmed_string = ltrim($string);
echo "Left trimmed string: " . $left_trimmed_string . "<br>";

// rtrim
$right_trimmed_string = rtrim($string);
echo "Right trimmed string: " . $right_trimmed_string . "<br>";

/*
trim() digunakan untuk menghilangkan spasi atau karakter lain di awal dan akhir string.
ltrim() digunakan untuk menghilangkan spasi atau karakter lain di awal string.
rtrim() digunakan untuk menghilangkan spasi atau karakter lain di akhir string
*/
?>
