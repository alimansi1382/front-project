<?php
require_once("__init__.php");
$mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);
$query = "SELECT * FROM `product`";
$products = $mysql->query($query)->fetchAll();

include '../views/home_view.php';