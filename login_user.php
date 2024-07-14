<?php

    require_once('init.php');

    if(isset($_POST['submit']))
    {   
        $emailnumber = $_POST['emailnumber'];
        $password = $_POST['password'];
        if($user = login($emailnumber, $password))
        {
            $_SESSION["id"] = $user['user_id'];
            $_SESSION["firstname"] = $user['first_name'];
            $_SESSION["lastname"] = $user['last_name'];
            $_SESSION["email"] = $user["email"];
            $_SESSION["phone_number"] = $user["phone_number"];
            header('Location: index.php');
        }else
        {
            echo 'Please create <a href="register.php">account</a>';
        }
    }

?>