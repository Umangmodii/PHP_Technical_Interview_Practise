<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input | PHP</title>
</head>
<body>

<form name = "myForm" method = "POST">

    <table>
        <tr>
            <th> <label> Enter the Number A </label> </th>
            <td> <input type = "number" name = "number1"> </td>
        </tr>

        <tr>
            <th> <label> Enter the Number B </label> </th>
            <td> <input type = "number" name = "number2"> </td>
        </tr>

        <tr>
            <td colspan="2"> <input type = "submit" name = "submit" value = "Addition"> </td>
        </tr>
    </table>

</form>
    
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        $sum = $number1 + $number2;

        echo "Addition is : " . $sum;
    }

?>