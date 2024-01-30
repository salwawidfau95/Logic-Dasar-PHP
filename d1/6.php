<?php
// terdapat sebuah variable yang menyimpan data tahun
// seperti yang diketahui,untuk tahun tahun yang merupakan kelipatan 4,pada bulan februari nya terdapat tanggal 29
// buatlah pengkondisian jika tahun merupakan kelipatan 4, maka akan menampilkan :
//tahun 2024,bulan februari sampai dengan tanggal 29
// selain dari itu, akan menampilkan :
// tahun 2023,bulan februari sampai dengan tanggal 28

$tahun = 2023; 

if ($tahun % 4 == 0) {
    echo "Tahun $tahun, bulan Februari sampai dengan tanggal 29";
} else {
    echo "Tahun $tahun, bulan Februari sampai dengan tanggal 28";
}
?>
