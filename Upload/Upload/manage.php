<link rel="stylesheet" href="../assets/css/main.css">
<?php
    require_once('includes/init.php');
    require_once('includes/core.php');

    if(isset($_POST['srch_prd']))
    {
        $prd_id = $_POST['prd_id'];
        $products = $core->get_good_by_id('prd_id', $_POST['prd_id']);
        if(!empty($products))
        {
            foreach($products as $val)
            {
                    echo "<div class='cont' style='margin-top:50px;'> <div class='products'>";
                    echo '<a style="width: 100%;" href="../catalog/index.php?prd_id=' . $val['prd_id'] . '"><img class="prd_img" src="../Upload/' . $val['photo'] . '" alt="Photo"></a>';
                    echo '<p class="name"><a href="../catalog/index.php?prd_id=' . $val['prd_id'] . '">' . $val['prd_name'] . '</a></p>';
                    echo '<p class="price">' . $val['price1'] . ' TMT <span class="price2" style="font-size: 0.9em;">'.$val['price2'].'</span></p>';
                    echo '<a href="delete_prd.php?del_id='.$val['prd_id'].'"><button class="add_to_basket">Delete</button></a>';
                    echo '<a href="update.php?upd_id='.$val['prd_id'].'"><button class="add_to_basket">Update</button></a>';
                    echo  '<ul>';
                    $data = array();
                    $info1 = explode(';' , $val['info1']);
                    $info2 = explode(';' , $val['info2']);
                    for($i = 0; $i < count($info1); $i++)
                    {
                        $data[$i]['key'] = $info1[$i];
                        $data[$i]['val'] = $info2[$i];
                    }
                    $counter = 0;
                    foreach($data as $val)
                    {
                        $counter++;
                        if($counter < 4)
                        {
                            echo '<li class="info">' . $val['key'] . ':<span class="info1">' . $val['val'] . '</span></li>';
                        }   
                    }
                    echo '</ul>';
                echo '</div>'; 
            }
        }else{
            echo "There is no products with this ID";
        }
    } else{
        echo '

<p style="color: black; font-size: 18px;">Type an ID of a product you want to edit</a></p><br>
<form action="" method="post">
    <input type="number" min="1" name="prd_id" placeholder="Type an ID of a product you want to edit">
    <input type="submit" name="srch_prd" value="Search">
    <select name="category_id">
        <option value="0">Выберите категорию</option>
';?>
        <?php
            foreach($core->get('categories', 'category_id', null) as $val)
            {
                echo '<option value="' . $val['category_id'] . '">' . $val['name'] . '</option>';
            }
        ?>
  <?php ' </select>
</form>
<br><br>
<p style="color: black; font-size: 18px;">If you want to add a new product: <a href="upload.php"><em>click me</em></a></p>
    '; }
    ?>
<?php
    ob_end_flush();
?>