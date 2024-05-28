<?php

$filename = "Data.txt"; // File Name
   
$handle = fopen($filename,"r"); // File Open

$content = fread($handle,filesize($filename)); // File read

echo $content; // Print

fclose($handle);