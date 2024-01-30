<?php 

// = : memberikan nilai pada variable
// = : memberikan dua nilai pada variable
// = : memberikan dua nilai pada variable & mengecek tipe data

$angka = "22";

if (gettype($angka) === "string") {
    echo "\"$angka\" adalah teks";
} else {
    echo "$angka adalah bilangan";
}

$angka1 = "22";

if ($angka1 === "22") {
    echo "\"$angka1\" adalah teks";
} else {
    echo "$angka1 adalah bilangan";
}

// $angka2 = "22";

// if (in_string($angka2)) {
//     echo "\"$angka2\" adalah teks";
// } else {
//     echo "$angka2 adalah bilangan";
// }
