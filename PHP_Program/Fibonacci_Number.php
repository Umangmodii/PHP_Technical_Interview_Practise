<?php

$number = 0;
$n1 = 0;
$n2 = 1;
$n3;

for($i=2; $i<=$number; $i++)
{
    $n3 = $n1 + $n2;
    echo "Fibonacci Number is : " . $n3;
    $n1 = $n2;
    $n2 = $n3;
}