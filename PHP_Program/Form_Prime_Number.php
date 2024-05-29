<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number | PHP</title>
</head>
<body>

    <form name = "myForm" method = "POST">

        <table>
            <tr> 
              <th> <label>  Enter the Number </label> </th>
              <td> <input type = "number" name = "number"> </td>
            </tr>

            <tr> 
              <td colspan = "2"> <input type = "submit" name = "Submit" value = "Submit"> </td>
            </tr>

        </table>
    </form>
</body>
</html>

<?php

    if(isset($_POST['number']))
    {
        $number = $_POST['number'];

    for($i=2; $i<=$number-1; $i++)
    {
        if($number % $i == 0)
        {
            $count = true;
        }
    }

    if(isset($count) && $count)
    {
        echo  $number . " is Not Number.";
    }

    else
    {
        echo $number . " a Prime Number.";
    }
    }



?>