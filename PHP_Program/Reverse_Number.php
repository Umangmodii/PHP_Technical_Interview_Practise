<?Php

$number = 123;
$remainder;
$reverse = 0;

while($number > 1)
{
    $remainder = $number % 10;
    $reverse = ($reverse * 10) + $remainder;
    $number = $number / 10; 
}

    echo "Reverse Number is : " . $reverse; 