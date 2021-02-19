<?php
/*function dari phpnya
1. date() 
    untuk menampilkan dengan format tertentu
2.detik
    detik yang sudah berlalu sejak 1 januari 1970

    > untuk menampilkan misal 100 hari kedepan dari sekarang kita kolab fun time and date

*/


date_default_timezone_set("Asia/jakarta");
echo date("l, d m y");
echo "<br>";
echo date("H:i:s");

//detik
echo time();
echo "<p>";

//cara ngitung hari
//menghitung 1000 hari kedepan, misal mau menghitung yang lalu tinggal di kurangi atau min

echo date("l, d M Y,", time()+60*60*24*1000);

//strtotime
//string to time
//cara penulisan bulannya bahasa inggris
echo "<p>";
echo date("l", strtotime("6 January 2003"));

?>