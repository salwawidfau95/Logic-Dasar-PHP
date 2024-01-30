<?php
// Dari bilangan berikut, kelompokan nilai-nilai tersebut menjadi kelompok kompeten (lebih dari atau sama dengan 75) dan belum kompeten (selain dari itu). Lalu tampilkan berdasarkan kelompok tersebut.

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

foreach ($bilangan as $key => $value) {
    if ($value >= 75) {
        $kompeten[] = $value;
    }else{
        $belumkompeten[] = $value;
    }
}

echo "Nilai Sudah Kompeten: ";
foreach ($kompeten as $sdh) {
    echo $sdh . " ";
}
echo "<br>";

echo "Nilai Belum Kompeten: ";
foreach ($belumkompeten as $blm) {
    echo $blm . " ";
}

