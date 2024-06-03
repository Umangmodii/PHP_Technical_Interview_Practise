<?php

$a = 10;
$b = 20;

echo "A = " . $a . " and" . " B = " . $b;

$temp = $a;
$a = $b;
$b = $temp;

echo "<br>";

echo "A = " . $a . " and" . " B = " . $b;