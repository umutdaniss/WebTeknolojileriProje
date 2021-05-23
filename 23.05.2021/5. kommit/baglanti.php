<?php
$vt_sunucu="sql113.epizy.com";
$vt_kullanici="epiz_28689340";
$vt_sifre="JbOvcFGO1M";
$vt_adi="epiz_28689340_g191210097";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan){
    
    die("Bağlantı başarısız".mysqli_connect_error());
}






?>