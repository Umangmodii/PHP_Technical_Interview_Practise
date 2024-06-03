<?php

$number = 122;
$reverse = 0;
$remainder;

$check = $number;

while($number > 0)
{
    $remainder = $number % 10;
    $reverse = ($reverse * 10) + $remainder;
    $number = $number / 10; 
}

if($check == $reverse)
{
    echo "Number is Not Palindrome.";
}

else
{
    echo "Number is Palindrome.";
}