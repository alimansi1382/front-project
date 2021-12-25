<?php
$baseroot = '../../';
?>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo $baseroot;?>assets/css/style.css">
  <link rel="shortcut icon" href="<?php echo $baseroot;?>assets/images/favicon.ico" type="image/x-icon">
  <title>چاپ ماهرنگ</title>
</head>
<body lang="fa">
  <div class="C-container">
  <a  href="<?php echo $baseroot;?>addUser_controller.php">اضافه کردن کاربر+</a>
  <table class="table">
        <tr>
          <th>شناسه</th>
          <th>نام</th>
          <th>نام خانوادگی</th>
          <th>ایمیل</th>
          <th>شهر</th>
          <th>موبایل</th>
          <th>رمز</th>
          <th></th>
          <th></th>
        </tr>
        <?php 
          foreach ($users as $user) {
            echo "
            <tr>
              <td>{$user['id']}</td>
              <td>{$user['firstname']}</td>
              <td>{$user['lastname']}</td>
              <td>{$user['email']}</td>
              <td>{$user['city']}</td>
              <td>{$user['phone']}</td>
              <td>{$user['password']}</td>
              <td><a href='../removeUser_controller.php?id={$user['id']}'>حذف</a></td>
              <td><a href='../editUser_controller.php.php?id={$user['id']}'>ویرایش</a></td>
            </tr>";
        ?>
        
        <?php
        }
         ?>
      </table>
  </div>
</body>
