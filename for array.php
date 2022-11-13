<?php 
$warna	= ['merah','biru','kuning','merah','hijau','biru','merah','biru','kuning','merah','hijau','biru'];

$jumlah_warna = 0;

for ($i=0; $i < 12 ; $i++) { 
        if($warna[$i] == 'merah'){
                $jumlah_warna++;
        }
}

echo "Berapa jumlah warna merah: " .$jumlah_warna;


?>