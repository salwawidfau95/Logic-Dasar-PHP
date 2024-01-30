<?php

//buatlah sebuah fungsi yg akan membandingkan dua buah string nama. Lalu menampilkan jumlah karakter dari dua nama tersebut, dan menampilkn nama yg memiliki jumlah karakter lebih banyak serta selisihnya

function pembandingNama($nama1, $nama2) {
    $jmlhnama1 = strlen(str_replace(' ', '', $nama1));
    $jmlhnama2 = strlen(str_replace(' ', '', $nama2));

    if ($jmlhnama1 > $jmlhnama2) {
        $selisih = $jmlhnama1 - $jmlhnama2;
        return " \"$nama1\" memiliki jumlah karakter lebih banyak daripada \"$nama2\" sebanyak $selisih karakter.";
    } elseif ($jmlhnama2 > $jmlhnama1) {
        $selisih = $jmlhnama2 - $jmlhnama1;
        return "Nama \"$nama2\" memiliki jumlah karakter lebih banyak daripada \"$nama1\" sebanyak $selisih karakter.";
    } else {
        return "Kedua nama tersebut memiliki jumlah karakter yang sama.";
    }
}

echo pembandingNama("Salwa Widfa Utami", "Bintang TheSanti");