<?php
//pengulangan pada array 
//foreach

$angka = [1, 2, 3, 4, 5, 6, 7, 8 , 9 ,10];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak{
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
/* supaya turun kebawah khusus html*/
    .clear{ clear:both; }
    </style>

</head>
<body>
    <!-- div menumpulkan elemen atau tag-tag -->
<?php for($x = 0; $x < 7; $x++): ?>
    <div class="kotak"><?= $angka [$x];?></div>
    <?php endfor;?>

    <!-- count untuk menghitung array tanpa ditikung -->
    <div class="clear"> </div>
    <?php for($x = 0; $x < count($angka); $x++): ?>
    <div class="kotak"><?= $angka [$x];?></div>
    <?php endfor;?>

    <!-- foreach -->
    <div class="clear"></div>

    <?php foreach($angka as $a):?>
        <div class="kotak"> <?= $a;?> </div>
        <?php endforeach ?>
</body>
</html>