<?php 
// syarat untuk mendaftar denga syarat selanjutnya:
// nilai minimum mata pelajaran sebaga berikut:
// matematik 87
// BAHASa iNGGRIS 85
// bahasa indonesia 87
// dengan minimum mata pelajaran dan minimum rata rata terpenuhi maka peserta dinyatakan diterima

$mtk = 87;
$bing = 85;
$bindo = 87;

$rta = ($mtk + $bing + $bindo)/3;

if ($rta >= 85) {
    echo "Nilai Anda : ". round($rta) ." <span style='color: green;'> (NILAI DITERIMA)</span>";
} else {
    echo "Nilai Anda : $rta <span style='color: red;'> (NILAI TIDAK DITERIMA)</span>";
}
?>