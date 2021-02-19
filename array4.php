<!-- jenis array ada dua 
1. array asosiatif itu bisa menginilisasikan tidak menggunaka indexs
2. array numerik yaitu array yang manggil index contohnya array3 -->
<?php
//array asosiatif
$mahasiswa =[
     ["nama" => "Ratih",
      "NIM" => "088847947",
      "Jurusan" => "Teknik Informatika",
      "Email" => "ratiheldina@gmail.com"],

    ["nama" =>"Eldina", 
    "NIM" => "476t346",
    "Jurusan" => "Teknik Informatika", 
    "Email" => "dina@gmail.com"],

    ["nama" => "El", 
    "NIM" => "476t78469",
    "Jurusan" => "Teknik Informatika",
     "Email" =>  "el@gmail.com"]

];
//manggil el
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
        <li>Nama : <?= $m["nama"]?></li>
        <li>NIM : <?= $m["NIM"]?></li>
        <li>Jurusan : <?= $m["Jurusan"]?></li>
        <li>Email : <?= $m["Email"]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>