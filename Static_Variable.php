<!-- // The static keyword can be used to declare variables and functions at global scope, namespace scope, and class scope. 
// Static variables can also be declared at local scope.  -->

<?php

function my_function()
{
    static $name1 = 10; // Static
    $name2 = 20;  // Non-Static

    echo "Static Variable is : " . $name1 . "<br>";
    $name1++; // Static Variables

    echo "Non-Static Variable is : " . $name2 . "<br>";
    $name2++; // Non - Static Variables
}

//first function call  
my_function();

//second function call
my_function();