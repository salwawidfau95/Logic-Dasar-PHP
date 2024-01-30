<?php

//tampilkan angka' yg bisa dibagi dgn 4 dan 5, pada rentang 1-50

for ($i=1; $i < 50; $i++){
    if (($i % 4 == 0) && ($i % 5 == 0)) {
        echo "angka yg bisa dibagi 4 & 5 adalah $i <br>";
    }
}