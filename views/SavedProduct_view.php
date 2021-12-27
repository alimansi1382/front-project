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
  <table class="table">
        <tr>
          <th>شناسه</th>
          <th>تصویر</th>
          <th>نام محصول</th>
          <th>دسته بندی محصول</th>
          <th>قیمت</th>
          <th></th>
        </tr>
        <?php 
          foreach ($productsArray as $product) {
            echo "
            <tr>
              <td>{$product['id']}</td>
              <td><img src='../assets/images/products/{$product['image_src']}' alt='{$product['name']}' width='50px'/></td>
              <td>{$product['name']}</td>
              <td>{$product['catg']}</td>
              <td>{$product['price']}ریال</td>
              <td><a href='{$baseroot}controllers/bookmarkProduct_controller.php?id={$product['id']}'>حذف</a></td>
            </tr>";
        ?>
        
        <?php
        }
         ?>
      </table>
  </div>
</body>
