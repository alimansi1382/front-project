<?php
require_once('../db.php');
$mysql = new db('localhost','root','','frontproject');

$users;

$query = "SELECT * FROM `user`";
if ($mysql->query($query)) {
    $users = $mysql->query($query)->fetchAll();
}

include_once('listUsers_view.php');
