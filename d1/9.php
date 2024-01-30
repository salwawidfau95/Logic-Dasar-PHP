<?php

//terdapat satu variabel yang memiliki value -5. tentukanlah apakah variabel tersebut masuk kedalam bilangan bulat positif , bilangan bulat negatifnatau bilangan cacah, dan apakah variabel tersebut
//merupakan variabel kelipatan 3

$a = -5;

if ($a > 0) {
    echo "$a adalah bilangan bulat positif <br>";
} elseif ($a < 0) {
    echo "$a adalah bilangan bulat negatif <br>";
} else {
    echo "$a adalah bilangan cacah <br>";
}

if ($a % 3 == 0) {
    echo " $a adalah kelipatan 3 ";
} else {
    echo " $a bukan kelipatan 3";

}

?>