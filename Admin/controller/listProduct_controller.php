<?php
//admin validation
if (!isset($_SESSION['id']) and !$_SESSION['role']===1) {
    die('Not Access');
}

$baseroot = '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;
$plugins = glob($baseroot.'*_plugin.php');

foreach ($plugins as $plugin) {
    require_once($plugin);
}

$mysql = new db('localhost','root','','frontproject');

$users;

$query = "SELECT * FROM `product`";
if ($mysql->query($query)) {
    $users = $mysql->query($query)->fetchAll();
}

include_once('listProduct_view.php');


