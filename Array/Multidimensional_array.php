<?php

$employees = array(
    array(1,"Umang",30000),
    array(2,"Mayank",65000),
    array(3,"Maulik",165000)
    );

for($row=0; $row<3; $row++)
{
    for($col=0; $col<3; $col++)
    {
        echo $employees[$row][$col] . " ";
    }
        echo "<br>";
}