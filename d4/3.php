<?php

//menu di rmh mkn Beni
// nasgor = 150000, ayam bakar = 20000, nasi kebuli = 25000, aneka jus = 8000, es th mns = 3000, es jeruk = 5000
//rmh mkn beni mengadakan program jumat berkah dgn memberikan diskon sebesar 5% dihari jumat dan 2% dihari senin.
//Hitunglah harga yg hrs di byr jika Dani ingin membeli 2 Nasi kebuli, 1 ayam bakar, 2 nasgor (gunakna hari secara otomatis dari hari ini)

$hari = Date("D");
$nasgor = 15000;
$ayambakar = 20000;
$kebuli = 25000;
$jus = 8000;
$thmns = 3000;
$jrk = 5000;

$diskonsenin = 0.02;
$diskonjumat = 0.05;
$totalbeli = ($kebuli * 2) + $ayambakar + ($nasgor * 2);

if($hari == "Mon"){
    $totalbayar = $totalbeli - $diskonsenin;
    echo "Anda mendapatkan diskon sebesar $diskonsenin . Uang yang harus dibayar : $totalbayar";
}elseif($hari == "Fri"){
    $totalbayar = $totalbeli - $diskonjumat;
    echo "Anda mendapatkan diskon sebesar $diskonjumat. Uang yang harus dibayar : $totalbayar";
}else{
    echo "Anda tidak mendapatkan diskon. Uang yang harus dibayar : " . $totalbeli;
}
