<?php require_once('includes/init.php'); ?>

<?php

    if(isset($_GET['del_id']) && !empty($_GET['del_id']))
    {
        $core->delete($_GET['del_id'], 'products', 'prd_id');
    }
?>