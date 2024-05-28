<?php

abstract class A
{
    public $id;
    public $name;
    public function Describe()
    {
        echo "Id is : " . $this->id . "<br>";
        echo "Name is : " . $this->name . "<br>";
    }
    abstract public function greeting();
}
class B extends A
{
    public function greeting()
    {
        return "Good Night";
    }

    public function Describe()
    {
        return parent::Describe();
    }
}

$B = new $B1($id,$name);
$B->id = 101;
$B->name = "Umang";

echo $B->greeting();

