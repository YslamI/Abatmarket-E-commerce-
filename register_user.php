<?php

    require_once('init.php');

    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // echo $firstname . ' ' . $lastname . ' ' . $email . ' ' . $phone_number . ' ' . $password . ' ' . $confirm_password . '<br>';

        // first name checking  

        if(strlen($firstname) < 4)
        {
            $errors[] = 'First name must contain at least 4 letters';
        }
        if($firstname >= 32)
        {
            $errors[] = 'First name max length is 32 letters';
        }

        // last name checking

        if(strlen($lastname) < 4)
        {
            $errors[] = 'Last name must contain at least 4 letters';
        }
        if(strlen($lastname) >= 32)
        {
            $errors[] = 'Last name max length is 32 letters';
        }

        // email checking

        $exp = "/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,20})(.[a-z]{2,10})$/";
        if(!preg_match($exp, $email))
        {
            $errors[] = 'Enter true email! Ex: example@gmail.com';
        }

        //phone number checking

        $exp = "/^([+])993\d{8}$/";
        if(!preg_match($exp, $phone_number))
        {
            $errors[] = 'Enter valid Turkmenistan phone number! Ex: +99365656565';
        }

        // password checking

        $exp = "/[A-Z]?[\d]?[!@#$%^&*()_+]/";

        if(strlen($password) < 6)
        {
            $errors[] = 'Password must contain at least 6 letters';
        }
        if(strlen($password) > 32)
        {
            $errors[] = 'Password max length is 32 letters';
        }
        if(!preg_match($exp, $password))
        {
            $errors[] = 'Password must contain at least one capital letter , one number and one symbol';
        }
        if($password != $confirm_password)
        {
            $errors[] = 'Passwords are not same!';
        }

        // errors output

        if(!empty($errors))
        {
            foreach($errors as $val)
            {
                echo $val . '<br>';
            }
        }else
        {
            if(check_register($email, $phone_number))
            {
                if(register($firstname, $lastname, $email, $phone_number, $password))
                {
                    header('Location: login.php?registered');
                }else
                {
                    echo 'There was an issue while we were registering you(';
                }
            }else
            {
                echo 'This email and phone number already registered!';
            }
        }



    }

?>