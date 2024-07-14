<?php

    session_start();
    require_once('functions.php');
    if(!defined('DB_SERVER'))
    {
        define('DB_SERVER', 'localhost');
    }
    if(!defined('DB_NAME'))
    {
        define('DB_UNAME', 'root');
    }
    if(!defined('DB_PASS'))
    {
        define('DB_PASS', '');
    }
    if(!defined('DB_NAME'))
    {
        define('DB_NAME', 'abatmarket');
    }
    if(!defined('DB_PORT'))
    {
        define('DB_PORT', '3306');
    }

    $connection = @mysqli_connect(DB_SERVER, DB_UNAME, DB_PASS, DB_NAME, DB_PORT);


?>