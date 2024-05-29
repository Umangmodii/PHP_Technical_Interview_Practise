<?php

$hostname = "localhost";
$username = "root";
$password = "";
$Database = "operation";

$connection = mysqli_connect($hostname,$username,$password,$Database);

if(!$connection)
{
     echo "Unable to Connect " . mysqli_connect_error();
}

else
{
     echo "Connection Suceesfully!";
}