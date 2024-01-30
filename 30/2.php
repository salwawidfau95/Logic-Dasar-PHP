<?php

//buatlah sebuah fungsi yg akan menghitung lembar uang rupiah
//cth : 140500
//lembar rupiah : 
// - Rp. 100.000 : 1
// - Rp. 20.000 : 2
// - Rp. 500 : 1

function hitungLembarRupiah($jumlahUang) {
    $lembarUang = array(
        100000 => 0,
        50000 => 0,
        20000 => 0,
        10000 => 0,
        5000 => 0,
        2000 => 0,
        1000 => 0,
        500 => 0,
    );

    foreach ($lembarUang as $nilai => $jumlah) {
        if ($jumlahUang >= $nilai) {
            $lembarUang[$nilai] = floor($jumlahUang / $nilai);
            $jumlahUang -= $lembarUang[$nilai] * $nilai ;
        }
    }
    
    echo "Lembar uang : ";
    foreach ($lembarUang as $nilai => $jumlah) {
        if ($jumlah > 0) {
            echo "<br> - Rp. " . number_format($nilai) . " : " . $jumlah;
        }
    }
}
hitungLembarRupiah(140500);


