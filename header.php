<?php require_once('init.php'); ?>
<?php require_once('Upload/includes/core.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>AbatMarket</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
<link rel="stylesheet" href="assets/css/tiny-slider.css" />
<link rel="stylesheet" href="assets/css/glightbox.min.css" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
<!--
<div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div> -->


<header class="header navbar-area">

<div class="topbar">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="top-left">
<ul class="menu-top-link">
<li>
<div class="select-position">
<select id="select4">
<option value="0" selected>TMT</option>
</select>
</div>
</li>
<li>
<div class="select-position">
<select id="select5">
    <option value="0" selected>Русский</option>
</select>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="top-middle">
<ul class="useful-links">
<li><a href="index.php">Главная</a></li>
<li><a href="about-us.php">О нас</a></li>
<li><a href="contact.php">Свяжитесь с нами</a></li>
<li><a href="index.php?dispatch=companies.apply_for_vendor">Стать продавцом</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="top-end">
<div class="user">

<?php 

    if(isset($_SESSION['id']))
    {
        echo '<i class="lni lni-user"></i>' . $_SESSION['firstname'];

?>
</div>
<ul class="user-login">
<li>
<a href="logout.php?logout" name="logout">Logout</a>
</li>
</ul>

<?php }else{ ?>

</div>
<ul class="user-login">
<li>
<a href="login.php">Войти</a>
</li>
<li>
<a href="register.php">Регистрация</a>
</li>
</ul>
<?php } ?>
</div>
</div>
</div>
</div>
</div>


<div class="header-middle">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-7">

<a class="navbar-brand" href="index.php">
<h2><em style="color: #0167F3">A</em>batMarket</h2>
</a>

</div>
<div class="col-lg-5 col-md-7 d-xs-">

<div class="main-menu-search">

<div class="navbar-search search-style-5">

<div class="search-input">
<input type="text" placeholder="Поиск">
</div>
<div class="search-btn">
<button><i class="lni lni-search-alt"></i></button>
</div>
</div>

</div>

</div>
<div class="col-lg-4 col-md-2 col-5">
<div class="middle-right-area">
<div class="nav-hotline">
<a href="tel: +99363040830"><i class="lni lni-phone"></i>
<h3>Горячая линия:
<span>+99363040830</span>
</h3></a>
</div>
<div class="navbar-cart">
<div class="wishlist">
<a href="javascript:void(0)">
<i class="lni lni-heart"></i>
<span class="total-items">0</span>
</a>
</div>
<div class="cart-items">
<a href="javascript:void(0)" class="main-btn">
<i class="lni lni-cart"></i>
 <span class="total-items">0</span>
</a>

<!--<div class="shopping-item">
<div class="dropdown-cart-header">
<span>2 Items</span>
<a href="cart.php">Корзина</a>
</div>
<ul class="shopping-list">
<li>
<a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
<div class="cart-img-head">
<a class="cart-img" href="product-details.php"><img src="assets/images/header/cart-items/item1.jpg" alt="#"></a>
</div>
<div class="content">
<h4><a href="product-details.php">
Apple Watch Series 6</a></h4>
<p class="quantity">1x - <span class="amount">$99.00</span></p>
</div>
</li>
<li>
<a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
<div class="cart-img-head">
<a class="cart-img" href="product-details.php"><img src="assets/images/header/cart-items/item2.jpg" alt="#"></a>
</div>
<div class="content">
<h4><a href="product-details.php">Wi-Fi Smart Camera</a></h4>
<p class="quantity">1x - <span class="amount">$35.00</span></p>
</div>
</li>
</ul>
<div class="bottom">
<div class="total">
<span>Сумма</span>
<span class="total-amount">$134.00</span>
</div>
<div class="button">
<a href="checkout.php" class="btn animate">Checkout</a>
</div>
</div>
</div> -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="container" id="categoryContent">
<div class="row align-items-center">
<div class="col-lg-8 col-md-6 col-12">
<div class="nav-inner">

<div class="mega-category-menu">
    <span class="cat-button"><i class="lni lni-menu"></i>Все категории</span>
    <ul class="sub-category">
        <li><a style="padding-bottom: 10px;">Смартфоны и аксессуары <i class="lni lni-chevron-right"></i></a>
            <ul class="inner-sub-category" style="z-index:10;">
                <li><a href="Cat_smartphones.php">Смартфоны</a></li>
                <li><a href="Cat_smart-watches.php">Смарт-часы</a></li>
                <li><a href="Cat_phone-accessories.php">Аксессуары</a></li>
                <li><a href="Cat_mobiles.php">Мобильные телефоны</a></li>
            </ul>
            </li>
    <ul class="sub-category" id="subcat-1">
        <li><a>Электроника <i class="lni lni-chevron-right"></i></a>
            <ul class="inner-sub-category" style="z-index:10;">
                <li><a href="Cat_projectors.php">Проекторы</a></li>
                <li><a href="Cat_computers&notebooks.php">Компьютеры и ноутбуки</a></li>
                <li><a href="Cat_comp-accessories.php">Аксессуары</a></li>
            </ul>
            </li>
        
    <ul class="sub-category" id="subcat-2" >
        <li><a>Продукты питания <i class="lni lni-chevron-right"></i></a>
            <ul class="inner-sub-category" style="z-index:10;">
                <li><a href="Cat_coffee.php">Кофе</a></li>
                <li><a href="Cat_drinks.php">Вода, соки и напитки</a></li>
                <li><a href="Cat_fruits-vegetables.php">Овощи, фрукты и другие</a></li>
            </ul>
        </li>
    <ul class="sub-category" id="subcat-3">
        <li><a>Хозяственные товары <i class="lni lni-chevron-right"></i></a>
            <ul class="inner-sub-category" style="z-index:10;">
                <li><a href="Cat_cloth-wash.php">Уход за одеждой и стирка</a></li>
                <li><a href="Cat_cleaning-mall.php">Товары для уборки</a></li>
                <li><a href="Cat_fresheners.php">Освежители воздуха</a></li>
            </ul>
        </li>
    <ul class="sub-category" id="subcat-4">
        <li><a>Одежда <i class="lni lni-chevron-right"></i></a>
           <ul class="inner-sub-category" style="z-index:10;">
                <li><a href="Cat_shoes.php">Обувь</a></li>
                <li><a href="Cat_man-clothes.php">Мужская одежда</a></li>
                <li><a href="Cat_woman-clothes.php">Женская одежда</a></li>
                <li><a href="Cat_junior-clothes.php">Детская одежда</a></li>
            </ul>
        </li>
        <li><a href="Cat_bytovaya-tehnika.php">Бытовая техника</a></li>
        <li><a href="Cat_stationery.php">Канцелярские товары</a></li>
        <li><a href="Cat_auto-malls.php">Товары для авто</a></li>
        <li><a href="Cat_used-malls.php">Б/у товары </a></li>
    </ul>
</div>


<nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler mobile-menu-btn" id="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon" id="navbar-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
    </button>


    <div class="button-left" id="left" style="z-index: 11;"><i class="lni lni-chevron-left"></i></div>
    <div class="button-right" id="right" style="z-index: 11;"><i class="lni lni-chevron-right" ></i></div>
    
    <div class="collapse navbar-collapse sub-menu-bar" style="z-index: 9; height: 60px;">
            <div id="wrap" style="width: 1550px; z-index:10; height: 350px; margin-top: 290px;">
        <ul id="nav" style="transition: 0.7s ease;" class="navbar-nav ms-auto">
        <li class="nav-item" id="count">
        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Смартфоны и аксессуары</a>
        <ul class="sub-menu collapse" id="submenu-1-1">
        <li class="nav-item"><a href="Cat_smartphones.php">Смартфоны</a></li>
        <li class="nav-item"><a href="Cat_smart-watches.php">Смарт-часы</a></li>
        <li class="nav-item"><a href="Cat_phone-accessories.php">Аксессуары</a></li>
        <li class="nav-item"><a href="Cat_mobiles.php">Мобильные телефоны</a></li>
        </li>
        </ul>
        <li class="nav-item" id="count">
        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Электроника</a>
        <ul class="sub-menu collapse" id="submenu-1-2">
        <li class="nav-item"><a href="Cat_projectors.php">Проекторы</a></li>
        <li class="nav-item"><a href="Cat_computers&notebooks.php">Компьютеры и ноутбуки</a></li>
        <li class="nav-item"><a href="Cat_comp-accessories.php">Аксессуары</a></li>
        </ul>
        </li>
        <li class="nav-item" id="count">
        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Продукты питания</a>
        <ul class="sub-menu collapse" id="submenu-1-2">
        <li class="nav-item"><a href="Cat_coffee.php">Кофе</a></li>
        <li class="nav-item"><a href="Cat_drinks.php">Вода, соки и напитки</a></li>
        <li class="nav-item"><a href="Cat_fruits-vegetables.php">Овощи, фрукты и другие</a></li>
        </ul>
        </li>
        <li class="nav-item" id="count">
        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Хозяственные товары</a>
        <ul class="sub-menu collapse" id="submenu-1-2">
        <li class="nav-item"><a href="Cat_cloth-wash.php">Уход за одеждой и стирка</a></li>
        <li class="nav-item"><a href="Cat_cleaning-mall.php">Товары для уборки</a></li>
        <li class="nav-item"><a href="Cat_fresheners.php">Освежители воздуха</a></li>
        </ul>
        </li>
        <li class="nav-item" id="count">
        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Одежда</a>
        <ul class="sub-menu collapse" id="submenu-1-2">
        <li class="nav-item"><a href="Cat_shoes.php">Обувь</a></li>
        <li class="nav-item"><a href="Cat_man-clothes.php">Мужская одежда</a></li>
        <li class="nav-item"><a href="Cat_woman-clothes.php">Женская одежда</a></li>
        <li class="nav-item"><a href="Cat_junior-clothes.php">Детская одежда</a></li>
        </ul>
        </li>
        <li class="nav-item" id="count">
        <a href="Cat_bytovaya-tehnika.php" aria-label="Toggle navigation">Бытовая техника</a>
        </li>
        <li class="nav-item" id="count">
        <a href="Cat_stationery.php" aria-label="Toggle navigation">Канцелярские товары</a>
        </li>
        <li class="nav-item" id="count">
        <a href="Cat_auto-malls" aria-label="Toggle navigation">Товары для авто</a>
        </li>
        <li class="nav-item" id="count">
        <a href="Cat_used-malls.php" aria-label="Toggle navigation">Б/у товары</a>
        </li>
        </ul>
        </div> 
   </div> 
</nav>

</div>
</div>
<div class="col-lg-4 col-md-6 col-12">
<!--
<div class="nav-social">
<h5 class="title">Подпишитесь на нас:</h5>
<ul>
<li>
<a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
</li>
</ul>
</div> -->

</div>
</div>
</div>
<div class="menu">
    <ul class="mobcat">
         <hr><a id="btn_1" href="javascript:void(0)">Смартфоны и аксессуары <i class="lni lni-chevron-down btn_down" id="btn_up1"></i></a>
        <div class="mobSub" id="mobSub1">
            <li><a href="Cat_smartphones.php">Смартфоны</a></li>
            <li><a href="Cat_smart-watches.php">Смарт-часы</a></li>
            <li><a href="Cat_phone-accessories.php">Аксессуары</a></li>
            <li><a href="Cat_mobiles.php">Мобильные телефоны</a></li>
        </div>
    </ul>
    <ul class="mobcat">
         <hr><a id="btn_2" href="javascript:void(0)">Электроника <i class="lni lni-chevron-down btn_down" id="btn_up2"></i></a>
        <div class="mobSub" id="mobSub2">
            <li><a href="Cat_projectors.php">Проекторы</a></li>
            <li><a href="Cat_computers&notebooks.php">Компьютеры и ноутбуки</a></li>
            <li><a href="Cat_comp-accessories.php">Аксессуары</a></li>
        </div>
    </ul>
    <ul class="mobcat">
         <hr><a id="btn_3" href="javascript:void(0)">Продукты питания<i class="lni lni-chevron-down btn_down" id="btn_up3"></i></a>
        <div class="mobSub" id="mobSub3">
                <li><a href="Cat_coffee.php">Кофе</a></li>
                <li><a href="Cat_drinks.php">Вода, соки и напитки</a></li>
                <li><a href="Cat_fruits-vegetables.php">Овощи, фрукты и другие</a></li>
        </div>
    </ul>
    <ul class="mobcat">
         <hr><a id="btn_4" href="javascript:void(0)">Хозяственные товары<i class="lni lni-chevron-down btn_down" id="btn_up4"></i></a>
        <div class="mobSub" id="mobSub4">
                <li><a href="Cat_cloth-wash.php">Уход за одеждой и стирка</a></li>
                <li><a href="Cat_cleaning-mall.php">Товары для уборки</a></li>
                <li><a href="Cat_fresheners.php">Освежители воздуха</a></li>
        </div>
    </ul>
    <ul class="mobcat">
         <hr><a id="btn_5" href="javascript:void(0)">Одежда<i class="lni lni-chevron-down btn_down" id="btn_up5"></i></a>
        <div class="mobSub" id="mobSub5">
                <li><a href="Cat_shoes.php">Обувь</a></li>
                <li><a href="Cat_man-clothes.php">Мужская одежда</a></li>
                <li><a href="Cat_woman-clothes.php">Женская одежда</a></li>
                <li><a href="Cat_junior-clothes.php">Детская одежда</a></li>
        </div>
    </ul>
    <ul class="mobcat"><hr><a href="Cat_bytovaya-tehnika.php">Бытовая техника</a></ul>
    <ul class="mobcat"><hr><a href="Cat_stationery.php">Канцелярские товары</a></ul>
    <ul class="mobcat"><hr><a href="Cat_auto-malls">Товары для авто</a></ul>
    <ul class="mobcat"><hr><a href="Cat_used-malls.php">Б/у товары</a></ul>
</div>
</header>