<?php

// presentasi kehadiran setiap siswa dalam satu bulan adlaha 100%
// sakit & izin berkurang 3 %
// alfa berkurang 5%
// hadir tidak berkurang

$sakitatauizin = 0; 
$alfa = 0;

echo $sakitatauizin == 1
    ? "Kehadiran : " . 100 - 3 . "%"
    : ($alfa == 1
        ? "Kehadiran : " . 100 - 5 . "%"
        : 'Kehadiran 100%');

