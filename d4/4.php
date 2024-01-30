<?php

//dani ingin membangun rmh disuatu komplek perumahan dgn panjang tanah 13m & lebar 9m,
//tetapi sebelum membangun rmh, dani harus memberikan laporan terlebih dahulu tipe rmh yg ingin dia buat kepada kontraktor bangunan
//degn luas tanah yg dia punya, masuk ke kategori manakah rmh Dani nantinya.
// tipe 36 : <90 m2
// tipe 45 : 90 - 96 m2
// tipe 54 : 96 - 120 m2
// tipe 60 : 120 - 150 m2
// tipe 70 : >150 m2

$panjang = 13;
$lebar = 9;
$luastanah = $panjang * $lebar;

if($luastanah < 90){
    echo " Luas Tanah adalah : $luastanah & Termasuk Tipe : 36";
}elseif($luastanah >= 90 && $luastanah < 96){
    echo " Luas Tanah adalah : $luastanah & Termasuk Tipe : 45";
}elseif($luastanah >= 96 && $luastanah < 120){
    echo " Luas Tanah adalah : $luastanah & Termasuk Tipe : 54";
}elseif($luastanah >= 120 && $luastanah < 150){
    echo " Luas Tanah adalah : $luastanah & Termasuk Tipe : 60";
}else{
    echo " Luas Tanah adalah : $luastanah & Termasuk Tipe : 70";
}