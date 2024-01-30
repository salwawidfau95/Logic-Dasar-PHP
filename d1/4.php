<?php
$thn = 2008;
$thnnow = date("Y"); 

$selisih = $thnnow - $thn;

if ($selisih >= 17) {
    echo "Tahun kelahiran $thn sudah dapat memiliki KTP Usia sekarang = $selisih";
} else {
    echo "Tahun kelahiran $thn belum dapat memiliki KTP Usia sekarang = $selisih";
}
?>
