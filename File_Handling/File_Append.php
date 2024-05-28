<?php

$filename = fopen("Data.txt","a");

fwrite($filename,'Welcome');

fclose($filename);

echo "File Added Successfully!";


