<?php

$jamnormal = 8;
$k1 = 50000;
$k2 = 25000;

$jmulai = 8;
$jakhir = 22;

$jmlhjm = $jakhir - $jmulai;

if ($jmlhjm > $jamnormal){
    $jmlhjmkompensasi = $jmlhjm - $jamnormal;

    if($jmlhjmkompensasi == 1){
        $kompensasi = $k1;
    }else {
        $kompensasi = (($jmlhjmkompensasi - 1) * $k2) + $k1;
    }

    echo "Jumlah Kompensasi : $kompensasi";
}else {
    echo "Tidak mendapat kompensasi";
}