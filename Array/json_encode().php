<?php

$session = array(
    array(
        'Samsung' => "South Korea"
    ),

    array(
        'Tata' => "India"
    ),

    array(
        'Apple' => 'American'  
    )
);

//an array to string  

echo json_encode($session);

echo "<br>";

print_r($session);