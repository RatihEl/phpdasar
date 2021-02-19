<?php
/* 1. inilisasi yaitu nilai awal
2. kondisi determinasi 
3. increment / decrement = pengurangan dan pengurangan 
*/


//for 
/* 
didalamnya ada 3
1. inilisasi = variable awal untuk pengulangan  = 0
2. kondisi determinassi = memberhentikan pengulanagan $!<5
3. increment atau decrement = menentukan pengulangannya maju atau mundur $i++ */


for($i = 0; $i < 5; $i++){
    echo "hello word! <br>";
}


//while
//kalo kondisinya true, lakukan yang didalam kurung kurawal {}
//kalo nilainya false ngga akan mencetak apapun
//cek dulu, baru jalan
$f = 0;
while($f < 5){
    echo"hello!! <br>";
    $f++;
}

//do while
//mlakukan hal yang ini selama kondisiinya true
//kalo false akan muncul cuma satu
//jalankan dulu, baru cek kondisi

$y = 10;
do{

echo "hello word? <br>";
$y++;

}while($y < 5);
?>