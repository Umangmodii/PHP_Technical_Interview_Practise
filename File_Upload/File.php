<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

    <form name = "myForm" method = "post" action = "File_Upload.php" enctype="multipart/form-data">

    <table>
        <tr>
            <th> <label> Select File </label> </th>
            <td> <input type = "file" name = "filetoupload"> </td>
        </tr>

        <tr>
            <td> <input type = "submit" name = "submit" value = "File_Upload"> </td>
        </tr>

    </form>
    
</body>
</html>