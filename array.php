<?php


// $a= array("metyu","anisa","Budi");

//cara untuk memanggil array sesui index
//echo $a[1];

//cara print untuk melihat isi array
//print_r($a);

//cara lengkap untuk melihat lebih detail
//var_dump($a);

$angka = array(1,2,3,4); //kumpulan data integer
$buah   = ["pisang","anggur","apel","kiwi","nanas"]; //kumpulan data string

// $buah[] = pisang; 

echo $angka[10] ?? '';
echo "<br>";
var_dump($buah);

echo $buah[0] = "jambu";


?>