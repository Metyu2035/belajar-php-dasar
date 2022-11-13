<?php 
$warna = 'Biru';
$ukuran = "L";

$biaya = 80000;
$biaya_tambahan = 95000;

//Pengecekan untuk kuran kain L dan warna kain Biru

// if($warna == 'Biru' && $ukuran == "L"){
//     echo "Total harga: " .($biaya+$biaya_tambahan);
// }else {
//     echo "Total harga: " .$biaya;
// }

//Pengecekan untuk ukuran XL dan warna tidak di kenakan biaya tambahan
if($warna == 'Merah' || $ukuran == 'XL'){
    echo "Total harga: " . ($biaya+$biaya_tambahan);
}else{
    echo "Total harga: " . $biaya;
}

?>