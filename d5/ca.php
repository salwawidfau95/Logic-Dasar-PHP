<?php

$array = array(1,2,3);

var_dump($array);
echo "<br>";
print_r($array);
echo "<br>";
for ($i=0; $i < count($array); $i++) { 
    echo $array[$i];
}
echo "<br>";
foreach ($array as $key => $value) {
    echo "index ke $key = ".$value."<br>";
}