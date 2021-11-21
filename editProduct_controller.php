<?php
include_once('db.php');
$id = $_GET["id"];
$mysql = new db('localhost','root','','frontproject');
var_dump($_POST);
$query = "UPDATE `product` SET `name`='{$_POST['product_name']}',
`catg`='{$_POST['product_catg']}',`price_component`='{$_POST['price_component']}',
`price`={$_POST['product_price']}";

if(isset($_POST['product_image']))
{
    $query.=",`image_src`='{$_POST['product_image']}'";
    $filename = $_FILES["product_image"]["name"];
	$tempname = $_FILES["product_image"]["tmp_name"];	
		$folder = "assets/images/".$filename;
		
		
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}

$query.=" WHERE `id`= {$id}";
echo "<br><br>";
print_r($query);
echo "<br><br>";
// if ($mysql->query($query)) {
//     echo "<br>";
//     echo "Success";
// }
