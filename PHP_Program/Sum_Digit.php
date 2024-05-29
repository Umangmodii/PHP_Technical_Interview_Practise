<?php

$number = "25";
$sum = 0;
$remainder;

while($number > 0)
{
    $remainder = $number % 10;
    $sum = $remainder + $sum;
    $number = $number / 10;
}

    echo "Sum of Digit is : " . $sum; 