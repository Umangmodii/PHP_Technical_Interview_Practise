<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
</head>
<body>

<form name = "myForm" method="POST" action = "welcome.php">

    <table>
        <tr>
            <td> <label> Enter the Username </label>
            <td> <input type = "text" name = "uname">
        </tr>

        <tr>
            <td> <label> Enter the Password </label>
            <td> <input type = "password" name = "password">
        </tr>

        <tr>
            <td colspan = "2"> <input type = "submit" name = "submit" value = "Submit">
        </tr>
    </table>
</form>
   
</body>
</html>