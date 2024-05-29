<?php

$number = 2;
$count = 0;

for($i=1; $i<=$number; $i++)
{
    if($number % $i == 0)
    {
        $count++;
    }
}

    $temp = $count;

    if($temp == 2)
    {
        echo "Number is Prime";
    }

    else
    {
        echo "Number is Not Prime";
    }
