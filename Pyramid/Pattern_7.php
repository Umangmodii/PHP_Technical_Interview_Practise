<?php

$n = 65;

for($i=0; $i<5; $i++)
{
    for($j=0; $j<=$i; $j++)
    {
        echo chr($n) . " ";   
    }

    $n = $n + 1;
    echo "<br>";
}

// A 
// B B 
// C C C 
// D D D D 
// E E E E E