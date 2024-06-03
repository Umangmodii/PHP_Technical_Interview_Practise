<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation | JS</title>
</head>
<body>

<form name="myForm" action="#" onsubmit="return validate()">  
<table>  
    <tr>
        <td>Enter Name:</td>'
        <td><input type="text" name="name"/> </td>
    </tr>

    <tr>
        <td>Enter Password:</td>
        <td><input type="password" name="password"/>  
 
    <tr>
        <td colspan="2"><input type="submit" value="register"/></td>
    </tr>  
</table>  
</form>  
    
</body>
</html>

<script>
    
    function validate()
    {
        var name = document.forms['myForm']['name'].value;
        var password = document.forms['myForm']['password'].value;

        if(name == "")
        {
            alert("Please Enter your Name");
            return false;
        }

        if(password == "")
        {
            alert("Please Enter your Password");
            return false;
        }

        return true;
    }

</script>