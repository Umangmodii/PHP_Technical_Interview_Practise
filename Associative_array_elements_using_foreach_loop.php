<?php

$employees = array(
    "Id" => 1,
    "Name" => "Umang",
    "Email" => "Umangmodi003@gmail.com",
    "Age" => 22,
    "Salary" => 30000
);

foreach($employees as $key => $element)
{
    echo $key . " : " . $element;
    echo "<br>";
}