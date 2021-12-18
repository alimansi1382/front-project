<?php
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


