<?php

//operator penggabung string
// . itu titik
// tanda (" ") bisa juga untuk spasi
//misal cuma = yang dibaca paling bawah
//fur_dump untuk debuging

$nama1 = "Ratih";
$nama2 = "Eldina";

echo $nama1 . " " . $nama2;
echo "<p>";
//operator aritmatika
// + - / % modulus sisa habis bagi
$x = 30;
$y = 15;
echo "hasil dari $x + $y = " ;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x * $y;
echo "<p>";
//operator assignment
// =, +=, -= , *= , /= , %=, .=
$x = 1;
$x -= 5;
echo $x;
echo "<br>";

$nama = "ratih";
$nama .= " ";
$nama .= "dina";
echo $nama;
echo "<p>";

//operator perbandingan
// < , > <= , >= , == !=
//var  dump untuk mengecek debug hanya untuk developer
var_dump(1 == "1");
echo "<br>";

//operator identitas
//perbedaan kalo identitas membaca tipen datanya string
// === , !===
var_dump(1 === "1");
?>