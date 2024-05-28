<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Set </title>
</head>
<body>

<!-- setcookie(name, value, expire, path, domain, security);

Name: It is used to set the name of the cookie.
Value: It is used to set the value of the cookie.
Expire: It is used to set the expiry timestamp of the cookie after which the cookie can’t be accessed.
Path: It is used to specify the path on the server for which the cookie will be available.
Domain: It is used to specify the domain for which the cookie is available.
Security: It is used to indicate that the cookie should be sent only if a secure HTTPS connection exists. -->

<?php
    setcookie("User_Authentications","Person",time() + 2 * 24 * 60 * 60);
?>

<?php
     echo "Cookie is Created!";
?>

<p> 
        <strong> Note : </strong>
        <p> You might have to reload the page to see the value of the cookie. </p>
</p>

</body>
</html>