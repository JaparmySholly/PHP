<?php

// In PHP, we have the following loop types:

// while - loops through a block of code as long as the specified condition is true
// do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
// for - loops through a block of code a specified number of times
// foreach - loops through a block of code for each element in an array

$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}

// With the break statement we can stop the loop even if the condition is still true:

$p = 1;
while ($p < 6) {
    if ($p == 3) break;
    echo $p;
    $p++;
}

// With the continue statement we can stop the current iteration, and continue with the next:

$y = 0;
while ($y < 6) {
    $y++;
    if ($y == 3) continue;
    echo $y;
}