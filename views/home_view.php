<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ماهرنگ</title>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $baseroot;?>assets/css/style.css">
    <?php include'__init__.php'; ?>
</head>
<body id="body-container" lang="fa">
    <?php include_once('header.php'); ?>
    <nav id="navigation-bar">
        <ul class="list">
            <li class="list_item"><a href="" class="link">خانه</a></li>
            <li class="list_item"><a href="" class="link">محصولات پیشنهادی</a></li>
            <li class="list_item"><a href="" class="link">تماس با ما</a></li>
        </ul>
    </nav>
    <aside id="sidebar">
        فیلتر محصولات
    </aside>
    
    <main id="container">
        <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper" style="width:100%;height:400px;">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url('../assets/images/slides/Slide1.jpg');background-size: cover;"></div>
            <div class="swiper-slide" style="background-image: url('../assets/images/slides/Slide2.jpg');background-size: cover;"></div>
            <div class="swiper-slide" style="background-image: url('../assets/images/slides/Slide3.jpg');background-size: cover;"></div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
        </div>

        <div class="cards-section">
            <?php
                foreach($products as $product)
                {
                    $islike= isLike($mysql,$product['id']);
                    $isbookmark = isBookmark($mysql,$product['id']);
                    $iscontaincard = isContainCard($mysql,$product['id']);
                    include '../assets/templates/ProductCard.php';
                }
            ?>
        </div>
    </main>
    
    
    <?php include_once('footer.php'); ?>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="<?php echo $baseroot;?>assets/js/main.js"></script>
    <script src="<?php echo $baseroot;?>assets/js/templates/card.js"></script>
</body>
</html>