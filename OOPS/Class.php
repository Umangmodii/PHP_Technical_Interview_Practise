<?php
    class My_Class
    {
        private $name = "Hello World!";

        public function display()
        {
            echo $this->name;
        }
    }

    $c1 = new My_Class();
    $c1->display();

    echo "<br>";

    // The var_dump() function is used to display the structured information (type and value) about one or more variables.

    var_dump($c1);