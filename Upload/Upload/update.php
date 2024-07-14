<link rel="stylesheet" href="../assets/css/main.css">
<?php
    require_once('includes/init.php');
    require_once('includes/core.php');

    if(isset($_GET['upd_id']) && !empty($_GET['upd_id']))
    {
        $prd_info = $core->get('products', 'prd_id', $_GET['upd_id']);
        $upd_prd = $core->get_good_by_id('prd_id', $_GET['upd_id']);
    }
?>

<?php
    if(isset($_POST['upd_prd']))
    {
        $prd_name = $_POST['prd_name'];
        $amount = $_POST['amount'];
        $price1 = $_POST['price1'];
        $price2 = $_POST['price2'];
        $category_id = $_POST['category_id'];
        $info1 = $_POST['info1'];
        $info2 = $_POST['info2'];
        $description = $_POST['description'];

        $main_photo_name = $_FILES["main_photo"]['name'];
        $main_photo_tmp_name = $_FILES["main_photo"]['tmp_name'];
        $photos_name = $_FILES["photos"]['name'];
        $photos_tmp_name = $_FILES["photos"]['tmp_name'];
        
        if(empty($prd_name))
        {
            $errors[] = "Type a name of a product";
        }
        if(empty($amount))
        {
            $errors[] = "Enter an amount of a product";
        }
        if(empty($price1))
        {
            $errors[] = "Type a price of a product";
        }
        if(empty($category_id))
        {
            $errors[] = "Select a category of a product";
        }
        if($main_photo_tmp_name == NULL)
        {
            $errors[] = "The main photo is required, please insert it!";
        }

        if(isset($_POST['upd_prd']) && empty($errors))
        {
            $uploaded_file = "img/" . $main_photo_name;
            if(move_uploaded_file($main_photo_tmp_name, $uploaded_file))
            {
                $main_photo = $uploaded_file;
            }else{
                $main_photo = 0;
            }

            for($i = 0; $i < count($photos_name); $i++)
            {
                $uploaded_files[] = "img/" . $photos_name[$i];
                if(move_uploaded_file($photos_tmp_name[$i], $uploaded_files[$i]))
                {
                    $photos = implode(',', $uploaded_files);
                }else{
                    $photos = NULL;
                }                
            }
        }
        if(empty($_FILES['main_photo']['name']))
        {
           $main_photo = $upd_prd[0]['photo'];
        } if(empty($photos_name))
        {
            $photos = $upd_prd[0]['photos'];
        }
        $info_1 = implode(';', $info1);
        $info_2 = implode(';', $info2);
        global $photos;
            $upload_product = array(
                'category_id' => $category_id,
                'prd_name' => $prd_name,
                'amount' => $amount,
                'photo' => "img/" . $main_photo_name,
                'photos' => $photos,
                'price1' => $price1,
                'price2' => $price2,
                'info1' => $info_1,
                'info2' => $info_2,
                'description' => $description);
        $core->update('products', $upload_product, 'prd_id', $prd_info['prd_id']);
    }
?>

<h2>Update Product</h2>
<?php 
if(isset($_POST['upd_prd']) && !empty($errors))
{
    echo '<h3>Product hadn\'t been updated, because:</h3>';
}else if(isset($_POST['upd_prd']) && empty($errors))
{
    echo '<h3>Product is successfully added</h3>';
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <p><input type="text" name="prd_name" placeholder="Введите имя товара" 
    value="<?php if(isset($upd_prd) && !empty($upd_prd)) echo $upd_prd[0]['prd_name'];?>"></p>
    <p><input type="number" min="1" name="amount" placeholder="Введите количество товара"
    value="<?php if(isset($upd_prd) && !empty($upd_prd)) echo $upd_prd[0]['amount'];?>"></p>
    <p><input type="number" name="price1" placeholder="Цена1 товара в ТМТ"
    value="<?php if(isset($upd_prd) && !empty($upd_prd)) echo $upd_prd[0]['price1'];?>"> TMT</p>
    <p><input type="number" name="price2" placeholder="Цена2 товара в ТМТ"
    value="<?php if(isset($upd_prd) && !empty($upd_prd)) echo $upd_prd[0]['price2'];?>"> TMT</p>
    <select name="category_id">
        <option value="0">Выберите категорию</option>

        <?php
            foreach($core->get('categories', 'category_id', null) as $val)
            {
                echo '<option value="' . $val['category_id'] . '"';
                if(isset($upd_prd) && $upd_prd[0]["category_id"] == $val["category_id"])
                {
                    echo ' selected="selected"';
                }
                echo '>' . $val['name'] . '</option>';
            }
        ?>
    </select>
        <p><input type="number" id="info_count" value=1 min= 1 name="info_count" placeholder="Количество характеристик"></p>
        <div id="get_count">
        <?php
            foreach($upd_prd as $val)
            {
                $data = array();
                $info1 = explode(';', $val['info1']);
                $info2 = explode(';', $val['info2']);
                for($i = 0; $i < count($info1); $i++)
                {
                    $data[$i]['key'] = $info1[$i];
                    $data[$i]['val'] = $info2[$i];
                }
                foreach($data as $val2)
                {
                    echo '<p><input type="text" name="info1[]" placeholder="Product\'s info1" value="'.$val2['key'].'">
                    <input type="text" name="info2[]" placeholder="Product\'s info2" value="'.$val2['val'].'"></p>';   
                }
            }
        ?>    
        </div>
    <p><textarea type="text" name="description" placeholder="Product's description"><?php if(isset($upd_prd) && !empty($upd_prd))
     echo $upd_prd[0]['description'];?></textarea></p>
        <?php
            if(isset($upd_prd) && !empty($upd_prd[0]['photo']))
            {
                echo '<img src="' . $upd_prd[0]['photo'] . '" height=100px;> ';
            }
        ?>
    <p><input type="file" name="main_photo">Главное Фото товара</p>
    <?php 
    if(!empty($upd_prd[0]['photos']))
    {
        foreach($upd_prd as $val)
        $upd_photos[] = explode(',', $val['photos']);
            foreach($upd_photos as $val2)
                {
                    foreach($val2 as $val3)
                    echo '<img src="' . $val3 . '" height=100px;>';
                }
    }else{
        echo "<h6>If you want to add supplemental photos other than the main photo, you can do it by clicking the button below</h6>";
    }
    ?>
    <p><input type="file" name="photos[]" multiple="">Остальные Фото товара</p>
    <p><input type="submit" name="upd_prd" value="Update Product"></p>
</form>
<script src="count.js"></script>
<script src="jquery-3.6.0.js"></script>
<?php
    ob_end_flush();
?>