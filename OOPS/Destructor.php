<?php

class A
{
    public function A()
    {
        echo "constructor1...";  
    }
}
class B extends A
{
    public function __construct()
    {
        echo parent::A();
        echo "constructor2...";  
    }   
    public function __destruct()
    {
        echo "Destructor1...";  
    }
}

$b1 = new B();
