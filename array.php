<?php

//array
//variabel yang dapat memiliki banyak nilai
//element pada array boleh memiliki tipe data yg berbeda

//array = pasangan antara key dan value
//key = index, dimulai dari angka 0

$hari = "senin";
$hari = "selasa";

//membuat array
$hari = array("senin", "selasa", "rabu");

//cara baru
$bulan = ["January", "February", "Maret"];
$arr = [123, "text", true];

//mencetak array
//var_dump dan prin_r untuk debuging
var_dump($arr);
echo"<p>";
print_r($bulan);

echo"<p>";
echo $bulan[1];

//menambahakan element baru dari Array

$bulan[] = "April";
var_dump($bulan);



?>