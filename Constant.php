<!-- that can't be changed during the execution of the script except for magic constants, which are not really constants. 
PHP constants can be defined by 2 ways:

Using define() function
Using const keyword -->

<!-- Unlike variables, constants are automatically global throughout the script. -->

<!-- 1. define() -->

<!-- Use the define() function to create a constant. It defines constant at run time. Let's see the syntax of define() function in PHP. -->

<!-- Syntax -->

<!-- name: It specifies the constant name.
value: It specifies the constant value.
case-insensitive: Specifies whether a constant is case-insensitive. Default value is false. It means it is case sensitive by default. -->

<?php

define("MESSAGE","Hello, JAVATPOINT");

echo MESSAGE;

echo "<br>";

// 2. const keyword

// const to create a constant. The const keyword defines constants at compile time. 
// It is a language construct, not a function. The constant defined using const keyword are case-sensitive.

const GREETING = "Hello PHP!";
echo GREETING;