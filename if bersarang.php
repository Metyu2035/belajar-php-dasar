<?php 
$nilai_tes = 79;
$wawancara = 'C';


//Bila niali test anda lebih dari 70 maka akan masuk ke pada kode program dibawah ini
if($nilai_tes >= 70){
    echo "Anda lulus.";
    if($wawancara == 'A'){
        echo "Predikat anda sangat memuaskan";
    }else if($wawancara == 'B'){
        echo "Predikat anda Memuaskan";
    }else{
        echo "Predikat anda cukup Memuaskan";
    }

}else{
    echo "anda belum lulus";
}

?>