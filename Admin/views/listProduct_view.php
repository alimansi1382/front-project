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
  <a  href="<?php echo $baseroot;?>addProduct.php">اضافه کردن محصول+</a>
  <table class="table">
        <tr>
          <th>شناسه</th>
          <th>تصویر</th>
          <th>نام محصول</th>
          <th>دسته بندی محصول</th>
          <th>نوع قیمت دهی</th>
          <th>قیمت</th>
          <th></th>
          <th></th>
        </tr>
        <?php 
          foreach ($users as $user) {
            echo "
            <tr>
              <td>{$user['id']}</td>
              <td><img src='../assets/images/products/{$user['image_src']}' alt='{$user['name']}' width='50px'/></td>
              <td>{$user['name']}</td>
              <td>{$catg[$user['catg']]}</td>
              <td>{$price_component[$user['price_component']]}</td>
              <td>{$user['price']}ریال</td>
              <td><a href='../removeProduct_controller.php?id={$user['id']}'>حذف</a></td>
              <td><a href='../editProduct_view.php?id={$user['id']}'>ویرایش</a></td>
            </tr>";
        ?>
        
        <?php
        }
         ?>
      </table>
  </div>
</body>
