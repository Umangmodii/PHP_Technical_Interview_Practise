<?php

$alpha = range('A','Z');

for($i=0; $i<5; $i++)
{
    for($j=0; $j<=$i; $j++)
    {
        echo $alpha[$j];
    }

    echo "<br>";
}

// A
// AB
// ABC
// ABCD
// ABCDE