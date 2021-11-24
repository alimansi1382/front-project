<?php
echo "
<section class='filled card'>
    <img src='../assets/images/products/{$product['image_src']}' class='card-img-top' alt=''>
    <div class='card-body'>
        <h5 class='card-title'>{$product['name']}</h5>
        <div class='secondary-title'>{$product['price']} ریال</div>
        <p class='card-text'></p>
        <a href='#' class='btn btn-primary'>بازدید از محصول...</a>
    </div>
</section>
"
?>
