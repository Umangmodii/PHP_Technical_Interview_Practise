<?php

class A
{
    public $id;
    public $name;

    public function __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
    }
    public function setid($id)
    {
        $this->id=$id;
    }

    public function setname($name)
    {
        $this->name=$name;
    }

    public function display()
    {
        echo "Id is : " . $this->id . "<br>"; 
        echo "Name is : " . $this->name . "<br>"; 
    }
}

$a1 = new A(1,"Umang");
$a1->display();


