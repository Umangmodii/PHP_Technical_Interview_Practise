<?php

$personarray = array("Umang","Parth","Rahul");

$search_value = "Parth";

print_r("Value is : " . $search_value);

print_r($personarray,$search_value);

function Search($search_value, $personarray)  
{  
// using the array_search() function to find specific array value  
    return(array_search($search_value, $personarray));  
}  