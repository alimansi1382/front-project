<?php
include_once('db.php');
$id = $_GET["id"];
$mysql = new db('localhost','root','','frontproject');

$query = "UPDATE `user` SET `firstname`='{$_POST['firstname']}',
`lastname`='{$_POST['lastname']}',`email`='{$_POST['email']}',`city`='{$_POST['city']}',
`phone`='{$_POST['phone']}',`password`='{$_POST['password']}' WHERE `id`={$id}";
if ($mysql->query($query)) {
    echo "<br>";
    echo "Success";
}

