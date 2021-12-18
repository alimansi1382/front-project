<?php

if (!isset($_POST['submit'])) {
    include_once('../views/login_view.php');
}else {
    session_start();
    $plugins = glob('../*_plugin.php');

    foreach ($plugins as $plugin) {
        include_once($plugin);
    }

    $cdb = new db('localhost','root','','frontproject');
    
    $query = "SELECT * FROM `user` WHERE `email`='{$_POST['email']}' AND `password` = '{$_POST['password']}';";
    $result = $cdb -> query($query)->fetchArray();
    $cdb -> close();

    // if ($result['firstn']) {
    
    // }
    if (count($result)>0) {
        //set sessions
        foreach ($result as $key => $value) {
            $_SESSION[$key] = $value;
        }

        echo "<p>شما با موفقیت وارد شدید</p>";
        echo "<a href='./home_controller.php'>خانه</a>";
    }else {
        echo "<p>کاربری با این اطلاعات وجود ندارد</p>";
        echo "<a href='./home_controller.php'>خانه</a>";
    }

}