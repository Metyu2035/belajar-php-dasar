<?php 

$nama = $_GET['nama'];
$alamat = $_GET['alamat'];


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="nama" id="">
        <input type="text" name="alamat" id="">
        <input type="submit">
    </form>


    <h1>Selamat datang belajar PHP, <?php echo $nama  ?></h1>
    <p>Alamat anda berada di: <?php echo $alamat ?> </p>
    <p>ini adalah pembuatan form dasar php</p>
</body>
</html>