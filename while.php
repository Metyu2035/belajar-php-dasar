<?php 


// Menghitung jumlah antrian
// $value = 1;

// while($value <= 15){
//     echo "Berapa nomor antrian: $value <br>";
//     $value++;
// }


// Menghitung jumlah warna

$warna =  ['merah','biru','kuning','merah','hijau','
        biru','merah','biru','kuning','merah','hijau','biru'];

$jumlah_warna = 0;
$i = 0;

while ($warna[11] == 'biru' ) {
    $jumlah_warna++;
}
$i++;   

echo "Berapa jumlah waran biru: ".$jumlah_warna;

?>