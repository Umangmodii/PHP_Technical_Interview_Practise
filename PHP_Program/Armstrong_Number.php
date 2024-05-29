<?php

$number = 371;
$remainder;
$sum = 0;

while($number > 0)
{   
    $remainder = $number % 10;
    $sum = $sum + ($remainder * $remainder * $remainder);
    $n = $n / 10;
}

if($number == $sum)
{
    echo "Number is Armstrong.";
}

else
{
    echo "Number is Not Armstrong.";
}

