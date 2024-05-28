<!-- PHP session is used to store and pass information from one page to another temporarily (until user close the website).

PHP session technique is widely used in shopping websites where we need to store and pass cart information 
e.g. username, product code, product name, product price etc from one page to another.

PHP session creates unique user id for each browser to recognize the user and avoid conflict between multiple browsers. -->

<?php

session_start();

$_SESSION["Id"] = 1;
$_SESSION["Name"] = "Umang";

echo "Id is : " . $_SESSION['Id'] . "<br>";
echo "Name is : " . $_SESSION['Name'] . "<br>";

session_destroy();