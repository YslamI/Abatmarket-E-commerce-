<?php

    require_once('init.php');

    function escape_sql_injection($val)
    {
        return htmlentities(strip_tags(mysqli_real_escape_string($val)));
    }


    function register($firstname, $lastname, $email, $phone_number, $password)
    {
        global $connection;
        $query = "INSERT INTO users (first_name, last_name, email, phone_number, password) VALUES ('$firstname', '$lastname', '$email', '$phone_number', '$password')";
        if($query_run = mysqli_query($connection, $query))
        {
            return true;
        }else
        {
            return false;
        }
    }

    function check_register($email, $phone_number)
    {
        global $connection;
        $query = "SELECT * FROM users WHERE email='$email' OR phone_number='$phone_number'";
        $query_run = mysqli_query($connection, $query);
        if(mysqli_num_rows($query_run)>0)
        {
            return false;
        }else
        {
            return true;
        }
    }

    function login($emailnumber, $password)
    {
        global $connection;
        $exp1 = "/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,20})(.[a-z]{2,10})$/";
        $exp2 = "/^([+])993\d{8}$/";
        if(preg_match($exp1, $emailnumber))
        {
            $query = "SELECT * FROM users WHERE email = '$emailnumber' AND password = '$password'";
        }
        if(preg_match($exp2, $emailnumber))
        {
            $query = "SELECT * FROM users WHERE phone_number = '$emailnumber' AND password = '$password'";
        }

        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) == 1)
        {
            return mysqli_fetch_assoc($query_run);
        }else
        {
            return false;
        }
    }

    function user_info($emailnumber, $password)
    {
        global $connection;
        $exp1 = "/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,20})(.[a-z]{2,10})$/";
        $exp2 = "/^([+])993\d{8}$/";
        if(preg_match($exp1, $emailnumber))
        {
            $query = "SELECT * FROM users WHERE email = '$emailnumber' AND password = '$password'";
        }
        if(preg_match($exp2, $emailnumber))
        {
            $query = "SELECT * FROM users WHERE phone_number = '$emailnumber' AND password = '$password'";
        }
        $query_run = mysqli_query($connection, $query);
        return mysqli_fetch_assoc($query_run);
    }


?>