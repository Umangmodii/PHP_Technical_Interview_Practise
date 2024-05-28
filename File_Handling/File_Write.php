<?php

$filesystem = fopen("Data.txt",'w'); // File Open

fwrite($filesystem,"Umang") . "<br>"; // File Write
fwrite($filesystem,"PHP File"); 

fclose($filesystem); // File Close

echo "Successfully File Write.";