<?Php

ini_set("send_email_from","Umangmodi003@gmail.com");

$to = "techwebumang@gmail.com";
$subject = "Hello";
$smtp_port = 25;
$message = "Welcome,Umang";
$header = "From:Umangmodi003@gmail.com \r\n";

$result = mail($to,$subject,$message,$header);

if($result == true)
{
    echo "Mail send successfully!";
}

else
{   
    echo "Mail Not Send!";
}