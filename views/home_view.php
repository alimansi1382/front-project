<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body lang="fa">
    <!-- Slider main container -->
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
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>