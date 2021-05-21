<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="website";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan){
    
    die("Bağlantı başarısız".mysqli_connect_error());
}
else{
    echo "bağlantı başarılı";
}





?>