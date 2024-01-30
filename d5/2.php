<?php

// Dari data berikut, tampilkan nama dan dari data tahun tersebut tentukan apakah nama tersebut lahir ditahun kabisat atau bukan. Contoh :
    // 1. Andi : lahir pada tahun kabisat (2008)
    // 2. Beni : lahir bukan pada tahun kabisat (2001)

    $thnlahir = [
        [
            'nama' => 'Andi',
            'thn' => 2008
        ],
        [
            'nama' => 'Beni',
            'thn' => 2001
        ],
        [
            'nama' => 'Dani',
            'thn' => 2004,
        ],
        [
            'nama' => 'Eko',
            'thn' => 2006,
        ]
    ];

    foreach ($thnlahir as $value) {
        if ($value["thn"] % 4 == 0) {
            echo $value["nama"] . " lahir pada tahun " . $value["thn"] . " termasuk Tahun Kabisat <br>";
        } else {
            echo $value["nama"] . " lahir pada tahun " . $value["thn"] . " bukan termasuk Tahun Kabisat <br>";
        }
    }