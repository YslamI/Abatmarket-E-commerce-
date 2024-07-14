<?php
    if(isset($_POST['count']))
    {
        for($i=0; $i < $_POST['count']; $i++)
        {
            echo '<p><input type="text" name="info1[]" placeholder="Product\'s info1">
            <input type="text" name="info2[]" placeholder="Product\'s info2"></p>';
        }
    }
?>