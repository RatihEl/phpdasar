<?php
//isset = ngecek variable udah dibikin atau belum
// cek apakah tidak ada data Di $_GET
// ketika belum dibikin makan akan dipaksa pindah ke halaman
if( !isset($_GET["nama"]) || 
    !isset($_GET["NIM"]) || 
    !isset($_GET["Jurusan"])  
){
    //redirect
    //memaksa untuk pindah ke hal.2
    header("Location: latihan2.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
    <ul>
        <li><?= $_GET["nama"]?></li>
        <li><?= $_GET["NIM"]?></li>
        <li><?= $_GET["Jurusan"]?></li>
    <ul>

    <a href="latihan2.php">back</a>
</body>
</html>