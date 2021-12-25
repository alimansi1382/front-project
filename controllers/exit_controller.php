<?php
if (isset($_SESSION['id'])) {
    session_unset();

    echo "<p>شما با موفقیت خارج شدید</p>";
    echo "<a href='./home_controller.php'>خانه</a>";
}
