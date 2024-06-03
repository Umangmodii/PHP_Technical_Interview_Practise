<?php

$year = 2019;

if(($year % 400 == 0) and ($year % 100 !=0) and ($year % 4 == 0))
{
    echo "Leap Year";
}

else
{
    echo "Not Leap Year";
}