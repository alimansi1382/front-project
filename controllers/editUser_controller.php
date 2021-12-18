<?php
require_once('../db.php');
$id = $_GET["id"];
$mysql = new db('localhost','root','','frontproject');
error_reporting(E_ALL & ~E_NOTICE);
if (!isset($_POST['submit'])) 
{
    $query = "SELECT * FROM `user` WHERE id = {$id}";
    $result = $mysql->query($query)->fetchArray();
    include_once('../views/editUser_view.php');
}
else {
    $query = "UPDATE `user` SET `firstname`='{$_POST['firstname']}',
    `lastname`='{$_POST['lastname']}',`email`='{$_POST['email']}',`city`='{$_POST['city']}',
    `phone`='{$_POST['phone']}',`password`='{$_POST['password']}' WHERE `id`={$id}";
    if ($mysql->query($query)) {
        echo "<br>";
        echo "Success";
    }
}
