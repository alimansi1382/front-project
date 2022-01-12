<?php 
require '__init__.php';

$orderid = $_GET['id'];

$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$query = "SELECT * FROM `order_user` WHERE id = ?";
$result = $mysql->query($query,$orderid)->fetchArray();

$priceAll = $result['priceAll'];
$transport_price = $result['transport_price'];
$addres = $result['addres'];
$recive_date = $result['recive_date'];
$is_pay = $result['is_pay'];
if ($is_pay) {
    $is_pay = "پرداخت شده";
}else {
    $is_pay = "پرداخت نشده";
}


$query = "SELECT * FROM `order_user_item` WHERE oid = ?";
$result = $mysql->query($query,$result['id'])->fetchAll();


$allProduct = array();
foreach ($result as $key=>$value) {
    $array = array();
    $query ="SELECT * FROM `product` WHERE id=?";
    $result1 = $mysql->query($query,$value['pid'])->fetchArray();
    $array['name'] = $result1['name'];
    $array['price'] = $result1['price'];
    $array['image_src'] = $result1['image_src'];
    $array['qty'] = $value['qty'];
    $allProduct[$key] = $array;
}

// echo "<pre>";
// var_dump($allProduct);
// echo "</pre>";

$filename = explode('_',basename(__FILE__))[0];
include $viewroot.$filename.'_view.php';