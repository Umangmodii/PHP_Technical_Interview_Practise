<!-- An abstract class is a mix between an interface and a class. It can be define functionality as well as interface. -->

<?php
abstract class A
{
    abstract public function my_abstract_function1();
    abstract public function my_abstract_function2();
}
// class B extends A
{
    public function my_abstract_function1()
    {
        echo "Hello Abstract Class";
    }

    public function my_abstract_function2()
    {
        echo "Hello PHP!";
    }
}

$a1 = new B();
$a1->my_abstract_function1();
echo "<br>";
$a1->my_abstract_function2();

