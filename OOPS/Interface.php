<?php

interface A
{
    public function Animal();
}

interface B
{
    public function Cars();
}

class Information implements A,B
{
    public function Animal()
    {
        echo "Method 1....";
    }

    public function Cars()
    {
        echo "Method 2....";
    }
}

$in = new Information();
$in->Animal();
$in->Cars();
