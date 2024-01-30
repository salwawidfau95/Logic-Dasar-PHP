<?php
//terdapat 2 var yg menyimpan data angka
//apabila hasil perhitungn bagi antara angka1 & 2 merupakan desimal, maka hasil akan dibulatkan tertampil seperti berikut :
//10 : 3 = 3,3333 jika dibulatkan menjadi 3
// apabila hasil perhitungan bukan desimal : 10 : 5 = 2

$angka1 = 10;
$angka2 = 3;

$hasil = $angka1 / $angka2;

if (is_float($hasil)) {
    echo "$angka1 : $angka2 = $hasil dibulatkan menjadi " . round($hasil);
} else {
    echo "$angka1 : $angka2 = $hasil";
}
?>
