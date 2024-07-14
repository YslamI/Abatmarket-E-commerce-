<?php require_once('header.php'); ?>

<?php
      if(isset($_GET['dispatch']))
      {
        echo '<h3 style="margin: 10px;">Создать учетную запись продавца</h3>
        <form action="" method="post">
        <p style="font-size:20px; margin: 5px; font-weight:600; color:#1f1f1f;">Компания <span style="color: crimson">*</span></p>
          <p style="width:90%; margin: auto; margin: 0 0 10px 20px;"> 
          <input type="text" name="company" placeholder="Введите имя компании или бренда" style="width:105%; height: 35px; border:1.7px solid #0167f3; border-radius:5px; margin: auto;"> 
          </p>
          <div style="width: 100%;">
              <label style="font-size:20px; font-weight:600; margin: 5px; color:#1f1f1f;">Имя <span style="color: crimson">*</span>
          </label>
          <label style="font-size:20px; float:right; width:52%; font-weight:600; margin: 5px; color:#1f1f1f;">Фамилия <span style="color: crimson">*</span></p>
      </label><br>
  </div>
          <input type="text" name="name" placeholder="Введите ваше имя" style="width:45%; height: 35px; margin:0 35px 10px 15px; border:1.7px solid #0167f3; border-radius:5px">
          <input type="text" name="surname" placeholder="Введите вашу фамилию" style="width:45%; height: 35px; border:1.7px solid #0167f3; border-radius:5px"> 
          <p style="font-size:20px; margin: 5px; font-weight:600; color:#1f1f1f;">E-mail <span style="color: crimson">*</span></p>
          <p style="width:90%; margin: auto; margin: 0 0 10px 20px;"> 
          <input type="text" name="company" placeholder="Введите ваш E-mail" style="width:105%; height: 35px; border:1.7px solid #0167f3; border-radius:5px; margin: auto;"> 
          </p>
          <p style="font-size:20px; margin: 5px; font-weight:600; color:#1f1f1f;">Адрес <span style="color: crimson">*</span></p>
          <p style="width:90%; margin: auto; margin: 0 0 10px 20px;"> 
          <input type="text" name="company" placeholder="Введите ваш адрес" style="width:105%; height: 35px; border:1.7px solid #0167f3; border-radius:5px; margin: auto;"> 
          </p>
          <p style="font-size:20px; margin: 5px; font-weight:600; color:#1f1f1f;">Телефон <span style="color: crimson">*</span></p>
          <p style="width:90%; margin: auto; margin: 0 0 10px 20px;"> 
          <input type="text" name="company" placeholder="Введите ваш телефон" style="width:105%; height: 35px; border:1.7px solid #0167f3; border-radius:5px; margin: auto;"> 
          </p>
          <p style="width:95%; display:flex; justify-content: end;"><input type="submit" name="send" value="Отправить" style="display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 45px;
  min-width: 160px;
  padding: 0 15px;
  margin: 10px 0 10px 0;
  line-height: 1.1;
  color: #140d0d;
  border: 0 none;
  background: #55acee;
  background-clip: border-box;
  border-radius: 20px;"></p>
      </form>';
          
          require_once('footer.php');
          die();
      }
?>
<section class="hero-area">
<div class="container">
<div class="row">
<div class="col-lg-8 col-12 custom-padding-right">
<div class="slider-head">

<div class="hero-slider">

<div class="single-slider" style="background-image: url(assets/images/hero/slider-bg1.jpg);">
<div class="content">
<h2>
Banner 1
</h2>
<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
labore dolore magna aliqua.</p>
<h3><span>Now Only</span> $320.99</h3>
<div class="button">
<a href="" class="btn">Shop Now</a>
</div>
</div>
</div>


<div class="single-slider" style="background-image: url(assets/images/hero/slider-bg2.jpg);">
<div class="content">
<h2><span>Big Sale Offer</span>
Banner 2
</h2>
<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
labore dolore magna aliqua.</p>
<h3><span>Combo Only:</span> $590.00</h3>
<div class="button">
<a href="" class="btn">Shop Now</a>
</div>
</div>
</div>

</div>

</div>
</div>
<div class="col-lg-4 col-12">
<div class="row">
<div class="col-lg-12 col-md-6 col-12 md-custom-padding">

<div class="hero-small-banner" style="background-image: url('assets/images/hero/slider-bnr.jpg');">
<div class="content">
<h2>
<span>New line required</span>
Banner 3
</h2>
<h3>$259.99</h3>
</div>
</div>

</div>
<div class="col-lg-12 col-md-6 col-12">

<div class="hero-small-banner style2">
<div class="content">
<h2>Weekly Sale!</h2>
 <p>And it is Banner 4)</p>
<div class="button">
<a class="btn" href="">Shop Now</a>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>

<h3>Лучшие цены на смартфоны!</h3>
    <div class="cont">
    <?php

    $products = $core->get('products', 'prd_id', null);

    if(!empty($products))
    {
        foreach($products as $val)
        {
         if($val['category_id'] == 1)
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
    }
?>
    </div>
    <h3>Лучшие цены на смарт-часы!</h3>
    <div class="cont">
    <?php
    $products = $core->get('products', 'prd_id', null);

    if(!empty($products))
    {
        foreach($products as $val)
        {
         if($val['category_id'] == 2)
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
    }
?>
    </div>
    <h3>Лучшие цены на компютеры и ноутбуки!</h3>
    <div class="cont">
    <?php
    $products = $core->get('products', 'prd_id', null);

    if(!empty($products))
    {
        foreach($products as $val)
        {
         if($val['category_id'] == 6)
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
    }
?>
    </div>
    <h3>Лучшие цены на компютерные аксессуары!</h3>
    <div class="cont">
    <?php
    $products = $core->get('products', 'prd_id', null);

    if(!empty($products))
    {
        foreach($products as $val)
        {
         if($val['category_id'] == 7)
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
    }
?>
    </div>

<?php require_once('footer.php'); ?>