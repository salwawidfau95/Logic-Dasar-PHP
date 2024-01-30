<?php

// predikat terhadap hasil ujian diberikan ketika 
// mendapatkan predikat A jika nilai lebih dari 90mendapatkan predikat B jika nilai lebih dari 75
// selain itu mendapatkan predikat C 

$nilai = 80;

$predikat = $nilai > 90 ? $nilai . ' termasuk Predikat A' 
			: ( $nilai >= 75 && $nilai <= 90 
				? $nilai . ' termasuk Predikat B'
					: $nilai . ' termasuk Predikat C'
			  );
echo $predikat; 