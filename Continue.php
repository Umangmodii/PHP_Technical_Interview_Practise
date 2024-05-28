<?php

$number = array("One", "Two", "Three", "Stop", "Four");

foreach($number as $element)
{
    if($element == "Four")
    {
        continue;
    }

    echo $element . "<br>";
}