<?php

//waktu tdr yg baik untuk anak usia 6-12 adalah 10 jam, 
// untuk usia 12-18 adalha 8-9 jm, untuk usia 18-40 adalah 7-8 jm.
// apabila seseorang berusia 17 thn berpaa waktu tidur yg baik

$usia = 17;

if ($usia >= 6 && $usia <= 12) {
    echo "Waktu tidur yang baik adalah 10 jam";
} elseif ($usia > 12 && $usia <= 18) {
    echo "Waktu tidur yang baik adalah 8-9 jam";
} else{
    echo "Waktu tidur yang baik adalah 7-8 jam";
}