<?php
//untuk nyetak text
echo"Asalamu'alaikum Halo Ratih Eldina";
//untuk paragraf baru atau enter
echo"<p>";
echo"Cieee, sekarang kamu dibogor...selalu semangatya peluklah mimpu dikota hujan itu";
echo"<p>";
echo"Semangat";

//ini komentar

/*
-boleh pakai petik satu, tapi lebih aman pakai 
petik dua
-(h)atau header maksimal 6
-tulisan selamat datang itu namanya contoh php didalam html
-kalo pengin buat html klik tanda seru ! tinggal enter
1. php didalam html
2. php didalam php
*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php didalam html -->
    <h1>selamat datang <?php echo "Ratih"?></h1>
    
    <!-- ini html didalam php -->
    <?php echo"<h1>Ratih<h1>" ?>
   
</body>
</html>
