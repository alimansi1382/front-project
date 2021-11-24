<?php
include_once('../db.php');
$mysql = new db('localhost','root','','frontproject');
$query = "SELECT * FROM `product`";
$products = $mysql->query($query)->fetchAll();

include '../views/home_view.php';