<?php

    if(isset($_POST['submit']))
    {
        $uname = $_POST['uname'];
        $password = $_POST['password'];
    }

    echo "Welcome ", $uname . " Your Pasword is : " . $password;