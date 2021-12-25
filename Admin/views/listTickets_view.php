<?php 
$baseroot = '../../';
$price_component = array('metric' => 'متری','pices' => 'دونه ای');
$catg = array('bnr' => 'بنر','lva' => 'لیوان');
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
  <a  href="<?php echo $baseroot;?>addTicket_controller.php">اضافه کردن درخواست+</a>
  <table class="table">
        <tr>
          <th>شناسه</th>
          <th>عنوان مشکل</th>
          <th>موضوع مشکل</th>
          <th>نام درخواست کننده</th>
          <th>ایمیل درخواست کننده</th>
          <th>پیام درخواست</th>
          <th></th>
          <th></th>
        </tr>
        <?php 
          foreach ($users as $user) {
            echo "
            <tr>
              <td>{$user['ID']}</td>
              <td>{$user['title']}</td>
              <td>{$user['subject']}</td>
              <td>{$user['name']}</td>
              <td>{$user['email']}</td>
              <td>{$user['text']}</td>
              <td><a href='../removeTicket_controller.php?id={$user['ID']}'>حذف</a></td>
              <td><a href='../editTicket_controller.php.php?id={$user['ID']}'>ویرایش</a></td>
            </tr>";
        ?>
        
        <?php
        }
         ?>
      </table>
  </div>
</body>
