<?php 
//cara menulis array di dalam array

//$a = [250,true,["kambing","singa"]];

//var_dump($a);
//cara memanggil array dalam array
//echo $a[2][0];

$karnivora = ["singa", "harimau", "buaya"];
$harnivora = ["sapi", "kuda", "kambing"];
$omnivora = ["anjing", "Babi","tikus"];

$binatang = ["karnivora" => $karnivora, "harnivora" => $harnivora, "omnivora" => $omnivora];

echo $binatang["karnivora"][2];



?>