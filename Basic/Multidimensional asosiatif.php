<?php
$students = array(
    array("name" => "John", "age" => 20, "gender" => "male"),
    array("name" => "Sarah", "age" => 21, "gender" => "female"),
    array("name" => "Tom", "age" => 19, "gender" => "male")
);
echo var_dump($students);
// akses data pada array multidimensi
echo"element yg diakses :";
echo "<br>";
echo $students[1]['name']; // output: Sarah
echo "<br>";
echo $students[1]['age']; // output: Sarah
