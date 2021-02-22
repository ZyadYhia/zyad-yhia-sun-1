<?php
$x = 3;

// x wil assign it's value to y then will increment to be 4:::((y = 3 and x == 4)) 
$y = $x++;

// x wil increment to be 5 then add it's new value to y which is 3:::((x = 5 y = 3+5 => y = 8)) 
$y += ++$x;


// from last lines y = 8 so the second if will be excuted
if ($y == 7) {
    $x++;
    echo $x . "<br>";
} else if ($y == 8) {
    // this is the excutable case
    $x--; // x = 4
    echo $x . "<br>"; //print 4
} else if ($y == 9) {
    $x += 2;
    echo $x . "<br>";
} else {
    $x = 0;
    echo $x . "<br>";
}
