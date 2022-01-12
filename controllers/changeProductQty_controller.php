<?php 

$subject = $RoutingData[0];
$productid = $RoutingData[1];
$userid = $_SESSION['id'];
$productqty=0;
$cartid;
$output = array();

$mysql = new db(__dbhost__,__dbusername__,__dbpassword__,__dbname__);

$query = "SELECT * FROM `cards` WHERE uid = ? AND pid=?";
$result = $mysql->query($query,$userid,$productid)->fetchArray();
$productqty = $result['qty'];
$cartid = $result['id'];

switch ($subject) {
    case 'add':
        $productqty++;
        break;
    case 'minus':
        $productqty--;
        break;
}

if($productqty<1){
    $query = "DELETE FROM `cards` WHERE id=?";
    $result = $mysql->query($query,$cartid);
    $output['subject'] = 'delete';    
    $output['pid'] = $productid;       
}else{
    $query = "UPDATE `cards` SET `qty`=? WHERE id=?";
    $result = $mysql->query($query,$productqty,$cartid);
    $output['subject'] = 'changed';   
    $output['pid'] = $productid;     
    $output['qty'] = $productqty; 
}
echo json_encode($output);
