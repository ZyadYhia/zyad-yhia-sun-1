<?php

$numbers = [1,2,10,6,7,3];
$max = 0;
$min = 1000;
for ($i=0; $i < count($numbers); $i++) { 
    if ($numbers[$i] > $max ) {
        $max = $numbers[$i];
    } else if ($numbers[$i] < $min) {
        $min = $numbers[$i];
    }

}
echo "max number is $max <br>";
echo "max number is $min <br>";

