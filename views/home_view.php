<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body id="body-container" lang="fa">
    <header id="header">
        <div class="site-brand">
            <img src="../assets/images/logo.png" alt="" class="image-brand">
            <a href="../controllers/home_controller.php" class="link-brand">ماهرنگ</a>
        </div>
        <div class="header-action">
            <i class="fa fa-user-circle-o"></i>
            <i class="fa fa-shopping-cart"></i>
        </div>
    </header>
    <!-- <nav id="navigation-bar">
        <ul class="nav-linkes">
            <li class="nav-link"><a href="" class="link">خانه</a></li>
            <li class="nav-link"><a href="" class="link">محصولات پیشنهادی</a></li>
            <li class="nav-link"><a href="" class="link">تماس با ما</a></li>
        </ul>
    </nav> -->
    <aside id="sidebar">
        فیلتر محصولات
    </aside>
    
    <main id="container">
        <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper" style="width:100%;height:400px;">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url('../assets/images/slides/Slide1.jpg');background-size: cover;
    }"></div>
            <div class="swiper-slide" style="background-image: url('../assets/images/slides/Slide2.jpg');background-size: cover;
    }"></div>
            <div class="swiper-slide" style="background-image: url('../assets/images/slides/Slide3.jpg');background-size: cover;
    }"></div>
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
                    include '../assets/templates/ProductCard.php';
                }
            ?>
        </div>
    </main>
    
    
    <footer id="footer">
            <div class="item">
                <div class="headOptin">چاپ غیر مستقیم</div>
                <div class="Option">چاپ لیوان</div>
                <div class="Option">چاپ تیشرت</div>
                <div class="Option">چاپ کلاه</div>
            </div>
            <div class="item">
                <div class="headOptin">چاپ غیر مستقیم</div>
                <div class="Option">چاپ لیوان</div>
                <div class="Option">چاپ تیشرت</div>
                <div class="Option">چاپ کلاه</div>
            </div>
            <div class="item">
                <div class="headOptin">چاپ غیر مستقیم</div>
                <div class="Option">چاپ لیوان</div>
                <div class="Option">چاپ تیشرت</div>
                <div class="Option">چاپ کلاه</div>
            </div>
            <div class="item">
                <div class="headOptin">چاپ غیر مستقیم</div>
                <div class="Option">چاپ لیوان</div>
                <div class="Option">چاپ تیشرت</div>
                <div class="Option">چاپ کلاه</div>
            </div>
    </footer>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>