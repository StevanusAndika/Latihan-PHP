<?php

$nilai = 80;

echo"data nilai yg didapat :".$nilai;
echo "<br>";
if ($nilai == 100) echo "Istimewa";

elseif ($nilai < 100 && $nilai >= 90 ) 
echo "Baik Sekali";
elseif ($nilai  < 90 && $nilai >= 80)

echo "Baik"; 
elseif ($nilai < 80 && $nilai >= 70)
echo "Cukup Sekali";

elseif ($nilai < 70 && $nilai >= 60 )

echo "Cukup";

else

echo "Belajar Lagi";



?>