<?php
if (isset($_SESSION['id'])) {
    require_once("__init__.php");
    include_once('../views/userPanel_view.php');
}else {
    echo "not access";
}