<?php

// Outside the function declare in variable

$id = 10; // Global 

function my_function()
{
    global $id;

    echo "Id is : " . $id;
}

my_function();