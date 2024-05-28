<?php

$a = array();

$a[0][0] = "Umang";
$a[0][1] = "Parth";
$a[1][0] = "Mayank";

foreach($a as $b)
{
    foreach($b as $c)
    {
        echo $c;
        echo "<br>";
    }
}


