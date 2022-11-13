<?php
$nama = "metyu";
$golongan_darah = "B";
$alamat = "Bandung";
$nomor_hp = 12134400;

// Cetak PHP

$namaKelas = "IPA 1";
$nomorKelas = 1208;
$namaHewan = "<h1>Singa </h1>";

echo $namaKelas;
echo "</br>";
echo $nomorKelas;
echo $namaHewan;



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mix HTML</title>
</head>
<body>
    <h1>Belajar PHP mix, <?= $nama; ?></h1>
    <h1>Golongan darah, <?= $alamat; ?></h1>
    <h1>Alamat, <?= $alamat ?></h1>
    <h1>Nomor HP, <?= $nomorHp ?></h1>

</body>
</html>