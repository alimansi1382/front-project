<?php
$plugins = glob('../*_plugin.php');

foreach ($plugins as $plugin) {
    include_once($plugin);
}
$mysql = new db('localhost','root','','frontproject');
$query = "SELECT * FROM `product`";
$products = $mysql->query($query)->fetchAll();

include '../views/home_view.php';