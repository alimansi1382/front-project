<?php
if (isset($_SESSION['id']) and $_SESSION['role']===1) {
    require_once('../db.php');
    $mysql = new db('localhost','root','','frontproject');

    $users;

    $query = "SELECT * FROM `user`";
    if ($mysql->query($query)) {
        $users = $mysql->query($query)->fetchAll();
    }

    include_once('listUsers_view.php');
}else {
    echo "not access";
}


