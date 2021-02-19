<?php 
  
  for($i = 0; $i <= 100; $i++){
    echo "$i <br>";

    
}
echo"<p>";

date_default_timezone_set("Asia/jakarta");
$jam = date("H:i");



if($jam > "04.31" && $jam < "05.20"){
    $waktu = "subuh";
}elseif($jam >= "12.07" && $jam <"14.00"){
    $waktu = "dzuhur";
}elseif($jam >= "15.30" && $jam < "17.00"){
    $waktu = "Asar";
}elseif($jam >= "18.19" && $jam < "19.33"){
    $waktu = "Maghrib";
}else{
    $waktu = "Isya";

}

echo "Jangan lupa shalat $waktu";
echo"<p>";


$Zaki = 85;
if ($Zaki >= 90): 
	echo 'A';
elseif ($nilai = 80 && $nilai < 90):
	echo 'B';
elseif ($nilai < 70 && $nilai >= 80):
	echo 'C';
else:
	echo 'D';
endif;

?>


