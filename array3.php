<?php
$mahasiswa =[
     ["Ratih", "088847947", "Teknik Informatika", "ratiheldina@gmail.com"],
    ["Eldina", "476t346", "Teknik Informatika", "dina@gmail.com"],
    ["El", "476t78469", "Teknik Informatika", "el@gmail.com"],

];
//manggil anisah
//echo $mahasiswa[2][0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $m):?>
    <ul>
        <li>Nama : <?= $m[0]?></li>
        <li>NIM : <?= $m[1]?></li>
        <li>Jurusan : <?= $m[2]?></li>
        <li>Email : <?= $m[3]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>