<?php
// array
// definisi array adalah sebuah variabel yang dapat memiliki banyak nilai
// atau pasangan antara key dan value 
// key-nya dalah index yang dimulai dari 0

// cara bikin array
// cara lama
// nilai yang ada didalam array namanya element
// element pada array boleh memiliki type data yang berbeda
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];
// cara menapilkan array 
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
