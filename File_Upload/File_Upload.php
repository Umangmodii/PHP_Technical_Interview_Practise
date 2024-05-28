<?php

$target_path = "C:/Upload Image";
$target_path = $target_path.basename($_FILES['filetoupload']['name']);

if(move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_path))
{
    echo "File Uploaded Successfully!";
}

else
{   
    echo "Sorry! File not Uploded!";
}
