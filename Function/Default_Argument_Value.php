<?php

function my_function($id=102,$name="Kishan")
{
    echo "Id is : " . $id . "<br>";
    echo "Name is : " . $name;
}

my_function(101,"Parth");
my_function(); // Default Arguments
my_function(103,"Mayank");