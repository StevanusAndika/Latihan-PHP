<?php 
$numbers = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo var_dump($numbers).'<br>';
// akses data pada array multidimensi
echo "data indeks yang diakses".'<br>';
echo $numbers[0][2]; // output: 3
echo $numbers[2][1]; // output: 8
