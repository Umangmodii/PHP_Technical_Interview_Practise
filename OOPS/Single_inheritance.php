<?php

class Student
{
    public function My_function1()
    {
        echo "Function A Executed" . "<br>";
    }
}
class Information extends Student
{
    public function My_function2()
    {
        echo "Function B Executed";   
    }
}

$in = new Information();
$in->My_function1();
$in->My_function2();