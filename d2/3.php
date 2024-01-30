<?php
$totalBelanja = 180000;

if ($totalBelanja > 100000) {
    $diskon = 10000;
    $totalPembayaran = $totalBelanja - $diskon;
    echo "Anda mendapatkan voucher potongan harga sebesar " . number_format($diskon) . "<br> Total pembayaran anda : " . number_format($totalBelanja);
} else {
    echo "Total pembayaran anda : " . number_format($totalBelanja);
}
