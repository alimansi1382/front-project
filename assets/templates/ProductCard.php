<?php
$iconclassheart = '';
if($islike){
    $iconclassheart = 'fas';
}else{
    $iconclassheart = 'far';
}

$iconclassbookmark = '';
if($isbookmark){
    $iconclassbookmark = 'fas';
}else{
    $iconclassbookmark = 'far';
}

$cardtext = "";
$cardclass = "";
if($iscontaincard){
    $cardtext = "حذف از سبد";
    $cardclass = "remove";
}else{
    $cardtext = "افزودن به سبد";
    $cardclass = "add";
}

echo "
<section class='filled card'>
    <img src='../assets/images/products/{$product['image_src']}' class='card-img-top' alt=''>
    <div class='card-body'>
        <a href='{$baseroot}controllers/likeProduct_controller.php?id={$product['id']}'><i class='{$iconclassheart} fa-heart'></i></a>
        <a href='{$baseroot}controllers/bookmarkProduct_controller.php?id={$product['id']}'><i class='{$iconclassbookmark} fa-bookmark'></i></a>
        <h5 class='card-title'>{$product['name']}</h5>
        <div class='secondary-title'>{$product['price']} ریال</div>
        <p class='card-text'></p>
        <a href='{$baseroot}controllers/addCard_controller.php?id={$product['id']}' class='btn btn-primary {$cardclass} card_btn'>{$cardtext}</a>
    </div>
</section>
"
?>
