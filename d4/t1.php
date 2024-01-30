<?php

// ubah pukul 19.00 menjadi pukul 07.00 pm & ubah pukul 23.45 menjadi 11.45 pm
// pukul 08.55 mejadi pukul 08.55 am

$pukul = 19.00;

$pukulbaru = $pukul >= 12.00 ? $pukul -  12.00. " pm" : $pukul . " am";
echo $pukulbaru;