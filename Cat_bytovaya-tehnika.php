<?php require_once('header.php'); ?>

<div class="cont">
<?php 
    $products = $core->get_good_by_id('category_id', '18');
    if(empty($products))
    {
        echo '<p style="height: 300px; width: 100vw; text-align: center; font-size: 20px; margin: 20px;">Здесь пусто<p>';
    }else if(!empty($products))
    {
        foreach($products as $val)
        {
            echo "<div class='products'>";
            echo '<a style="width: 100%;" href="catalog/index.php?prd_id=' . $val['prd_id'] . '"><img class="prd_img" src="Upload/' . $val['photo'] . '" alt="Photo"></a>';
            echo '<p class="name"><a href="catalog/index.php?prd_id=' . $val['prd_id'] . '">' . $val['prd_name'] . '</a></p>';
            echo '<p class="price">' . $val['price1'] . ' TMT <span class="price2" style="font-size: 0.9em;">'.$val['price2'].'</span></p>';
            echo '<button class="add_to_basket">Купить</button>';
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
    }
?>
</div>
<?php require_once('footer.php'); ?>