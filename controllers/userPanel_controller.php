<?php
if (isset($_SESSION['id'])) {
    include_once('../views/userPanel_view.php');
}else {
    echo "not access";
}