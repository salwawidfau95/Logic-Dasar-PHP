<?php 
//rmh mkn Beni mengadakan program diskon 5% tiap pembelian hari selasa & pembelian diatas 100.000 dpt diskon 7%
//Hitunglah uang yg hrs di byr jika total pembelian 130.000 di hari ini 

$hari = Date("D");
$diskonselasa = 0.05;
$diskon100 = 0.07;

$totalbeli = 130000;

if($totalbeli > 100000){
    if($hari == "Tue"){
        $totaldiskon = ($totalbeli * $diskon100) + ($totalbeli * $diskonselasa);
        $totalbayar = $totalbeli - $totaldiskon;
    }else{
        $totaldiskon = $totalbeli * $diskon100;
        $totalbayar = $totalbeli - $totaldiskon;
    }
    echo "Anda mendapatkan diskon sebesar $totaldiskon. Uang yang harus dibayar : $totalbayar";
}elseif($hari == "Tue"){
    $totaldiskon = $totalbeli * $diskonselasa;
    $totalbayar = $totalbeli - $totaldiskon;
    echo "Anda mendapatkan diskon sebesar $totaldiskon. Uang yang harus dibayar : $totalbayar";
}else{
    echo "Anda tidak mendapatkan diskon. Uang yang harus dibayar : $totalbeli";
}
