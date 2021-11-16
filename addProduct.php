<?php

$name_servic = $_POST['name_servic'];
$price_servic = $_POST['price_servic'];
$icon_servic = $_POST['icon_servic'];

// Add Product
// $cdb = new mysqli('localhost','root','','frontproject');
// $query = "INSERT INTO 
// product(name,catg,price_component,price,image_src)
// VALUES('{$_POST['product_name']}','{$_POST['product_catg']}','{$_POST['price_component']}',{$_POST['product_price']},'{$_POST['product_image']}')";
// $result = $cdb -> query($query);
// if ($cdb -> error) {
//     echo $cdb -> error;
// } else {
//     echo '<div class="success-alert">موفقیت امیز</div>';
// }
// $cdb -> close();

$uploads_dir = '/assets/images';
echo "<br>";
// if ($error == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["product_image"]["tmp_name"];
    $name = basename($_FILES["product_image"]["name"]);
    move_uploaded_file($tmp_name, "$uploads_dir/{$name}");
// }

// get Product Id
// $cdb = new mysqli('localhost','root','','frontproject');
// $query = "SELECT id FROM product WHERE name = '{$_POST['product_name']}'";
// $result = $cdb -> query($query);
// $row = $result -> fetch_array(MYSQLI_NUM);
// $productId = $row[0];

//Add Services
// for ($i=0; $i < count($name_servic); $i++) { 
//     if (!$name_servic[$i]) {
//         break;
//     }
//     $service_query = "INSERT INTO 
//     services(name,price,product_id,image_src)
//     VALUES('{$name_servic[$i]}',{$price_servic[$i]},{$productId},'{$icon_servic[$i]}')";
//     $result = $cdb -> query($service_query);
// }
// if ($cdb -> error) {
//     echo $cdb -> error;
// } else {
//     echo '<div class="success-alert">موفقیت امیز</div>';
// }
// $cdb -> close();