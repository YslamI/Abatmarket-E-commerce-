<script src="count.js"></script>
<script src="jquery-3.6.0.js"></script>
<?php
    require_once('includes/init.php');
    if(isset($_POST['add_prd']))
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
        
        if(isset($_POST['add_prd']) && empty($errors))
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
            $info_1 = implode(';', $info1);
            $info_2 = implode(';', $info2);
        }
        
            $upload_product = array(
                'category_id' => $category_id,
                'prd_name' => $prd_name,
                'amount' => $amount,
                'photo' => $main_photo,
                'photos' => $photos,
                'price1' => $price1,
                'price2' => $price2,
                'info1' => $info_1,
                'info2' => $info_2,
                'description' => $description
            );
        $core->add('products', $upload_product);
    }
?>
<h2>Upload a new Product</h2>
<?php
    if(isset($_POST['add_prd']) && !empty($errors))
    {
        echo "<h3>Your products hadn't been added because:</h3>";
        foreach($errors as $val)
        {
            echo '<p>'. $val .'</p>';
        }
    }else if(isset($_POST['add_prd']) && empty($errors))
    {
        echo "<h3>Your product added successfully!</h3>";
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <p><input type="text" name="prd_name" placeholder="Введите имя товара"></p>
    <p><input type="number" name="amount" placeholder="Введите количество товара"></p>
    <p><input type="number" name="price1" placeholder="Цена1 товара в ТМТ"> TMT</p>
    <p><input type="number" name="price2" placeholder="Цена2 товара в ТМТ"> TMT</p>
    <select name="category_id">
        <option value="0">Выберите категорию</option>

        <?php
            foreach($core->get('categories', 'category_id', null) as $val)
            {
                echo '<option value="' . $val['category_id'] . '">' . $val['name'] . '</option>';
            }
        ?>
    </select>
        <p><input type="number" id="info_count" value=1 min= 1 name="info_count" placeholder="Количество характеристик"></p>
        <div id="get_count">
            <p><input type="text" name="info1[]" placeholder="Product's info1">
            <input type="text" name="info2[]" placeholder="Product's info2"></p>    
        </div>
    <p><textarea type="text" name="description" placeholder="Product's description"></textarea></p>
    <p><input type="file" name="main_photo">Главное Фото товара</p>
    <p><input type="file" name="photos[]" multiple="">Остальные Фото товара</p>
    <input type="submit" name="add_prd" value="Add Product">
</form>
<script src="count.js"></script>
<script src="jquery-3.6.0.js"></script>
<?php
    ob_end_flush();
?>