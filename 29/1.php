<?php

//buatlah sebuah function yg akan menampilkan hari tgl dgn format (senin, 22 jan 2024) hari menggunakan bahasa indonesia , argument diambil dari variable berikut

$date = date('D, d M Y');

function tglndo($date) {
    $tgl = new DateTime($date);
    $namaHari = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
    $namaBulan = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des');

    $hari = $namaHari[$tgl->format('w')];
    $bulan = $namaBulan[$tgl->format('n') - 1];
    // return strtr($namaHari, $namaBulan);
    return $hari . ', ' . $tgl->format('d') . ' ' . $bulan . ' ' . $tgl->format('Y');
}

echo $date;
echo " vs ";
echo tglndo($date);