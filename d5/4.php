<?php

// Buatlah kelompok dari bilangan dibawah ini. kelompok pertama berisikan bilangan yang sama antara kedua variabel. Dan kelompok kedua bilangan selain itu (yang tidak sama / yang hanya terdapat disalah satu variabel saja)

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

foreach ($bil1 as $bil) {
    if (in_array($bil, $bil2)) {
        $sama[] = $bil;
    }else{
        $tdksama[] = $bil;
    }
}

echo "Bilangan yang sama antara kedua variabel : ";
foreach ($sama as $sdhsama) {
    echo $sdhsama . " ";
}
echo "<br>";

echo "Bilangan yang tidak sama antara kedua variabel : ";
foreach ($tdksama as $blmsama) {
    echo $blmsama . " ";
}