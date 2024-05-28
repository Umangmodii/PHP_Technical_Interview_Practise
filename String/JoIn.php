<!-- PHP string join() is predefined function. 
It is used to return a string from the elements of an array. It is an alias of the implode() function.
 -->

 <?php

 $employees = array("Umang","Mayank","Maulik");

 echo join(" ",$employees) . "<br>";

 // Seprator not 
 // Output is : Umang Mayank Maulik
