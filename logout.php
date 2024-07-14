<?php

    require_once('init.php');

    if(isset($_SESSION['id']) && isset($_GET['logout']))
    {
        session_destroy();
        header('Location: index.php');
    }

?>