<?php

$numbers = [1, 2, 3, 4, 5, -9, -8, -3];
$sum1 = 0;
$sum2 = 0;
foreach ($numbers as $number) {
    if ($number < 0) {
        $sum2 = $sum2 + $number;
    } else {
        $sum1 = $sum1 + $number;
    }
}

echo $sum1 . " " . $sum2;
