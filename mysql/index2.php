<?php
//koneksi ke database
//(host, user, password, nama, database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

//ambil data dari table
$result = mysqli_query($db, "SELECT * FROM tb_wisata");
// var_dump($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Pantai Di Yogyakarta</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Alamat</th>
            <th>Detail</th>
            <th>Jam Buka</th>
        <tr>
        
        <?php $no = 1;?>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
      
        <tr>
            <td><?= $no; ?></td>
            <td><img src="images/<?= $row["gambar_wisata"]; ?> " width="100"></td>
            <td><?= $row["nama_wisata"]; ?></td>
            <td><?= $row["tempat_wisata"]; ?></td>
            <td><?= $row["detail_wisata"]; ?></td>
            <td><?= $row["jam_buka"]; ?></td>
        </tr> 
                <?php $no++ ?>
        <?php endwhile;?>
        </table>
</body>
</html>