<?php 
//superglobal variabel
/* 
adalh dari php tapi bisa dipanggil disemua atau global
*/
//var_dump($_SERVER);

//$_GET
// $_GET["nama"] = "Ratih";
//var_dump($_GET);
//nama variabel diusahakan kecil
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
   <ul>
   <?php foreach($mahasiswa as $m):?>
        <li>
        <!-- ngirim data/prassing -->
            <a href="latihan3.php?nama=<?= $m["nama"] ?>
            &NIM=<?= $m["NIM"]?>
            &Jurusan=<?= $m["Jurusan"]?>">
            <?= $m["nama"];?>
        </li>
   <?php endforeach;?>
    </ul>
</body>
</html>