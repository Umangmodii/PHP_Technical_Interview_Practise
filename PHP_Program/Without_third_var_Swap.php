<?php

$a = 10;
$b = 20;

echo "A = " . $a . " and" . " B = " . $b;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "<br>";

echo "A = " . $a . " and" . " B = " . $b;