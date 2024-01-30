<?php

function biodata($nama){
    echo "Hallo, $nama!";
}

biodata("Putri","Putra");
// biodata(); : bakal error karena argumentny kosong karna ada parameter jd wajib
biodata($nama);

//cth
// menghasilkan 10, & berfungsi sebagai mengambil nilai yang hasil eksekusi
function perkalian(&$angka) {
	echo $angka *= 5;
   };

   $no = 2; 
   perkalian($no); //10
   echo $no; //10

//    //menghasilkan 2
//    function perkalian($angka) {
// 	echo $angka *= 5;
//    }

//    $no = 2; 
//    perkalian($no); //10
//    echo $no; //10