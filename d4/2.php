<?php

//setiap orang memiliki IMT dan kategori IMT ny masing' Berikut Kategor IMT :
// Kurang dari 18.5 : Berat bada kurang
// DAri 18.5 sampai kurang dari 22,9 : normal
// DAri 22,9 sampai kurang dari 24,9 : berat badan lebih
//lebih dari dan sama dgn 25 : Obesitas
// jika Beni memiliki berat badan 44 kg dgn tinggi bdn 148 cm, termasuk kedalam kategori apakah Beni?

$berat = 44;
$tinggi = 1.48;
$imt = $berat / ($tinggi^2);

if($imt <= 18.5){
    echo "Nilai IMT : $imt & Termasuk kategori : Berat Badan Kurang";
}elseif($imt > 18.5 && $imt <= 22.9){
    echo "Nilai IMT : $imt & Termasuk kategori : Normal";
}elseif($imt > 22.9 && $imt <= 24.9){
    echo "Nilai IMT : $imt & Termasuk kategori : Berat Badan Lebih";
}else{
    echo "Nilai IMT : $imt & Termasuk kategori : Obesitas";
}