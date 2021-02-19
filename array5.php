<!DOCTYPE html>
<html lang="en">
<head>
<!-- kelas div itu kotaknya, ngatur kotaknya di html. kalo transisi itu di bagin 
transfrom dan radius -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 100px;
            height: 100px;
            background-color: pink;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear{
            clear:both;
        }
    </style>
</head>
<body>
        <?php $angka=[1,2,3,4,5,6,7,8,9,0]?>
        <?php foreach($angka as $a):?>
    <div class="kotak clear"><?php echo $a;?></div> 
    <?php endforeach;?>

    <div class="clear"></div>

    <?php $angka = [
        ["Ratih","Ummi","Nida"],
        ["Rifdah","Putri","Rosa"],
        ["Agiah","Tiyas","Diva"]
    ]
    ?>

    <?php foreach($angka as $a): ?>
        <?php foreach($a as $b): ?>
             <div class="kotak"> <?= $b; ?> </div>
    <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>


</body>
</html>