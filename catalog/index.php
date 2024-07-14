<?php require_once('../Upload/includes/database/connect.php'); ?>
<?php require_once('../Upload/includes/core.php'); ?>
<?php require_once('header.php'); ?>

<style>
@media(max-width:767px)
    {
        .main-img {
            margin: 0;
            width: 90%;
            text-align: center;
        }
        .main-img img{
            line-height: 10px;
        }
    }
</style>
<?php
  
  $goods = $core->get_good_by_id('prd_id', $_GET['prd_id']);
  if(isset($_GET['prd_id']))
  {
    foreach($goods as $val)
    {
     echo '<section class="item-details section">';
    echo '<div class="top-area">';
   echo '<div class="row align-items-center">';
     echo '<div class="col-lg-6 col-md-12 col-12">';
       echo '<div class="product-images">';
       echo '<main id="gallery">'; 
       echo '<div class="main-img">';
           echo '<img style="height:50%;" src="../Upload/' . $val['photo'] . '" id="current" alt="Photo '.$val['photo'].'">';
           echo '</div>';
             echo '<div class="images">';
               echo '<img style="width: 80%;" src="../Upload/' . $val['photo'] . '" class="img" alt="Photo '.$val['photo'].'">';
               $photos = explode(',', $val['photos']);
               foreach($photos as $val2)
               {
                   if($val2 != 0 || $val2 != NULL)
                   {
                       echo '<img style="width: 80%; height: 80px;" src="../Upload/'. $val2 .'" class="img" alt="Photo '.$val2.'">';
                   }
               }
         echo '</div>
              </main>
            </div>
          </div>';
            echo '<div class="product-info">';
            echo '<h2 class="title">'. $val['prd_name'] .'</h2>';
            echo '<h3 class="price" style="color: #0059d4; font-size: 1.5em;">'. $val['price1'] .'TMT <span class="price2">'.$val['price2'].'</span></h3>';
            echo '<form action="" method="post">
            <p style="z-index:100; position:absolute; margin-top:10px; color:black;">Кол-во <input class="amount" type="number" min=1 name="order_amount" value="1"></p>
            </form>';
            echo '<button class="add_to_basket" style="margin-left: 0; margin-top:100px; padding:11px;">Добавить в корзину</button>';
            echo '</div>';
            echo '<div class="description" style="display: flex; width:96%;margin-left:2%; border-bottom: 2.5px solid #55ACEE;">';
               echo '<h5 id="desc" class="active" style="border-bottom:3px solid black;">Описание</h5>';
               echo '<h5 id="chars">Характеристики</h5>';
            echo '</div>';
            echo '<div id="current_div">';
                    if(empty($val['description']))
                    {
                        echo '<div id="desc1">';
                        echo '<p style="text-align: center; color: gray; font-size: 17px;">Здесь пусто</p>';
                        echo '</div>';    
                    }else{
                        echo '<div id="desc1">';
                        echo '<p>'.$val['description'].'</p>';
                        echo '</div>';
                    }
                    if(empty($val['info1']) || empty($val['info2'] || $val['info1'] == NULL || $val['info2'] == NULL))
                    {
                        echo '<div id="char1">';
                        echo '<p style="text-align: center; color: gray; font-size: 17px;">Здесь пусто</p>';
                        echo '</div>';
                    }else{
                        echo '<div id="char1">';
                        echo  '<ul>';
                        $data = array();
                        $info1 = explode(';' , $val['info1']);
                        $info2 = explode(';' , $val['info2']);
                        for($i = 0; $i < count($info1); $i++)
                        {
                            $data[$i]['key'] = $info1[$i];
                            $data[$i]['val'] = $info2[$i];
                        }
                        foreach($data as $val2)
                        {
                            echo '<li><span>' . $val2['key'] . ':</span><span class="info2">' . $val2['val'] . '</span></li>';
                        }
                            echo '</ul>';
                        echo '</div>';
                    }
                    
               echo '</div>';
      echo '</section>';
      echo "<h4 style='padding: 0 0 5px 5px;'>Возможоно, вас это интересует</h4>";
      echo '<div class="cont" style="background: #f2f2f2;">';
      $same_prds = $core->get_good_by_id( 'category_id', $val['category_id']);
      $counter = 0;
      foreach($same_prds as $val3)
      {
          $counter++;
          if($val3['prd_id'] != $val['prd_id'] && $counter <= 4)
          {
              echo "<div class='products' style='background: white;'>";
              echo '<a style="width: 100%;" href="index.php?prd_id=' . $val3['prd_id'] . '"><img class="prd_img" src="../Upload/' . $val3['photo'] . '" alt="Photo"></a>';
              echo '<p class="name"><a href="catalog/index.php?prd_id=' . $val3['prd_id'] . '">' . $val3['prd_name'] . '</a></p>';
              echo '<p class="price">' . $val3['price1'] . ' TMT <span class="price2" style="font-size: 0.9em;">'.$val3['price2'].'</span></p>';
              echo '<button class="add_to_basket">Купить</button>';
                  echo  '<ul>';
              $data = array();
              $info1 = explode(';' , $val3['info1']);
              $info2 = explode(';' , $val3['info2']);
              for($i = 0; $i < count($info1); $i++)
              {
                  $data[$i]['key'] = $info1[$i];
                  $data[$i]['val'] = $info2[$i];
              }
              foreach($data as $val4)
              {
                  echo '<li class="info">' . $val4['key'] . ':<span class="info1">' . $val4['val'] . '</span></li>';
              }
                  echo '</ul>';
          echo '</div>';
        }
            
        }
        echo "</div>";
    }
  }

?>

<?php require_once('footer.php') ?>