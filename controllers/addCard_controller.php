<?php
require "__init__.php";

if (isset($_SESSION['id'])) {
        
    
    $status = '';

    $id = $_GET['id'];

    $mysql = new db($dbhost,$dbusername,$dbpassword,$dbname);

    $query = "SELECT * FROM `cards` WHERE pid = ? AND uid = ?";
    $result = $mysql->query($query,$id,$_SESSION['id'])->fetchArray();

    if (isset($result['id'])) {
        $query = "DELETE FROM `cards` WHERE id = ? ;";
        $result = $mysql->query($query,$result['id']);
        $output = array('status' => 200,'message' => 'محصول از سبد حذف شد.' );
    }else {
        $query = "INSERT INTO `cards`(`pid`, `uid`, `qty`) VALUES (?,?,1)";
        $result = $mysql->query($query,$id,$_SESSION['id']);
        $output = array('status' => 200,'message' => 'محصول به سبد اضافه شد.' ); 
    }
    if(isset($_GET['redirect'])){
        header("Location:Card_controller.php");
    }

}
else {
    $output = array('status' => 302,'message' => 'لاگین نکردی اخه!!' );
}

echo json_encode($output);