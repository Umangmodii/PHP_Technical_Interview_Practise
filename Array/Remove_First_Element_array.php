<?php

$numbers = array(10,20,40,50,70,30);

echo "Before Array list : ";

print_r($numbers);

echo "<br>";

$result = array_shift($numbers);
echo "After Array list : " . $result; 

echo "<br>";

print_r($numbers);

// array_shift Function


