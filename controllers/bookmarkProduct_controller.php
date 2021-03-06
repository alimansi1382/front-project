<?php
require "__init__.php";

$status = '';

$id = $_GET['id'];

$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

$query = "SELECT * FROM `bookmarkproduct` WHERE pid = ? AND uid = ?";
$result = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();

$output = array('status' => 0);

if (isset($result['id'])) {
    $query = "DELETE FROM `bookmarkproduct` WHERE id = ? ;";
    $result = $mysql->query($query,$result['id']);

    $output = array('status' => 200,'message' => 'محصول از ذخیره خارج شد.' );

}else {
    $query = "INSERT INTO `bookmarkproduct`(`pid`, `uid`) VALUES (?,?)";
    $result = $mysql->query($query,$id,$_SESSION['id']);

    $output = array('status' => 200,'message' => 'محصول ذخیره شد.' );
}

echo json_encode($output);