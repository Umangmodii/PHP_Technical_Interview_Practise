<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input | User </title>
</head>
<body>

<form name = "myForm" method = "POST">

<table>
    <tr>
        <th> Enter the Number A : </th>
        <td> <input type = "number" name = "first"> </td>
    </tr>

    <tr>
        <th> Enter the Number B : </th>
        <td> <input type = "number" name = "second"> </td>
    </tr>

</br>

    <tr>
        <td> <input type = "submit" value = "Addition" name = "addition"> </td>
        <td> <input type = "submit" value = "Subtraction" name = "subtraction"> </td>
    </tr>
</table>

</form>
    
</body>
</html>

<?php

    function add($x,$y)
    {
        $sum = $x + $y;

        echo "Sum is : " . $sum . "<br>";
    }

    if(isset($_POST['addition']))
    {
        add($_POST['first'],$_POST['second']);
    }
    function sub($x,$y)
    {
        $sub = $x - $y;

        echo "Sub is : " . $sub . "<br>";
    }

    if(isset($_POST['subtraction']))
    {
        sub($_POST['first'],$_POST['second']);
    }

?>