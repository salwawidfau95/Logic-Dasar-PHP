<?php

//buatlah sebuah fungsi yg akan mengubah sebuah number menjadi format "K" untuk ribuan dan "M" untuk jutaan. Misal 9500 menjadi 9,5k atau 1.700.000 menjadi 1,7M

function formatNumber($number) {
    if ($number >= 1000000) {
        echo number_format($number / 1000000, 1) . 'M';
    } else if ($number >= 1000) {
        echo number_format($number / 1000, 1) . 'K';
    } else {
        echo $number;
    }
}

formatNumber(9500) ; 
echo "<br>";
formatNumber(1700000); 
