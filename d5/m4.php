<?php 
// 4. Buatlah kelompok dari bilangan dibawah ini. kelompok pertama berisikan bilangan yang sama antara kedua variabel.
//  Dan kelompok kedua bilangan selain itu (yang tidak sama / yang hanya terdapat disalah satu variabel saja)

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 81, 45, 90, 98];

$sama = array_intersect($bil1, $bil2);

$beda1 = array_diff($bil1, $sama);
$beda2 = array_diff($bil2, $sama);

echo "Bilangan yang terdapat di kedua variabel: " . implode(" ", $sama);
echo "<br>";
echo "Bilangan yang hanya terdapat di variabel bilangan satu: " . implode(", ", $beda1);
echo "<br>";
echo "Bilangan yang hanya terdapat di variabel bilangan dua: " . implode(", ", $beda2);