<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contant.css">
</head>
<body>
<?php
$subjects = array('1'=>'مشکلات فنی','2'=>'مشکلات سفارشی','3'=>'مشکلات امنیتی');
$cdb = new mysqli('localhost','root','','frontproject');
$query = "INSERT INTO 
ticket(title,subject,name,email,text)
VALUES('{$_POST["title"]}',{$_POST["subject"]},'{$_POST["name"]}','{$_POST["email"]}','{$_POST["text"]}')";
$result = $cdb -> query($query);
if ($cdb -> error) {
    echo $cdb -> error;
} else {
    echo '<div class="success-alert">موفقیت امیز</div>';
}
$cdb -> close();

?>
</body>
</html>
