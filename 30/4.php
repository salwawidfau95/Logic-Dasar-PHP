<?php
//buatlah sebuah fungsi yang akan menghasilkan sebuah array dari banyak data yang diterima. data yang dikriim berbentuk string nama-nama jurusan . jika nama jursan yang dipanggil duplikat, maka yang dimasukkan ke array hanya salah satu saja yang capslock)
//contoh pemanggilan argumentnya : namafunct("PPLG", "HTL" ,"KLN", "PMN","pplg"). maka akan menghasilkan array
//["PPLG", "HTL", "KLN","PMN"]

function arry(...$jurusan) {
    $hasil = [];
    $jurusan = array_map('strtolower', $jurusan);
    $unique = array_unique($jurusan);
    foreach ($unique as $value) {
        $cps = strtoupper($value);
        $hasil[] = $cps;
    }
    return $hasil;
}

print_r(arry("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));
