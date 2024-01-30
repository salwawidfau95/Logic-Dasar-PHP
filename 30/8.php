<?php

$data = [80, 90, 75, 100, 85, 100, 66];

function searchNumber($angkaDicari, ...$data){
    $jumlah = 0;
    foreach ($data as $value) {
        if ($value == $angkaDicari) {
            $jumlah += 1;
        }
    }
    return $jumlah;
}

$angkaDicari = 100;
echo "Jumlah angka $angkaDicari = " . searchNumber($angkaDicari, ...$data);