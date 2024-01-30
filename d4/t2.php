<?php
// jika hari ini adalah hari senin maka hari ini upacara 
// jika hari ini bukan hari senin maka hari ini tidak upacra. (ambil tgl hari ini secara otomatis)

$hari = Date("D");

$upacara = $hari == "Mon" ? "Hari ini Upacara" : "Tidak Upacara";
echo $upacara;