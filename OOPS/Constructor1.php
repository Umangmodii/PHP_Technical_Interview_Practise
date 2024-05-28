<?php

class A
{
    public function A()
    {
        echo "Hello!" . "<br>";
    }
}
class B extends A
{
    public function __construct()
    {
        echo parent::A();

        echo "Umang";
    }
}

$b1 = new B();
