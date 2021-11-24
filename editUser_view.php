<?php
include_once('db.php');
$id = $_GET["id"];
$mysql = new db('localhost','root','','frontproject');
$query = "SELECT * FROM `user` WHERE id = {$id}";

$result = $mysql->query($query)->fetchArray();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styles -->
  <link rel="stylesheet" href="./assets/css/edit.css">
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
  <title>چاپ ماهرنگ</title>
</head>
<body>
  <div class="C-container">
    <div id="edit">
      <div id="form_title">فرم ویرایش اطلاعات</div>
      <hr>
      <form action="editUser_controller.php?id=<?php echo $id; ?>" method="post" id="edit_form">
        <div class="input_sections">
          <div class="input_section">
            <label for="firstname">نام :</label>
            <br>
            <input type="text" name="firstname" id="firstname" class="edit_input" value="<?php echo $result['firstname']; ?>">
          </div>
          <div class="input_section">
            <label for="lastname">نام خوانوادگی :</label>
            <br>
            <input type="text" name="lastname" id="lastname" class="edit_input" value="<?php echo $result['lastname']; ?>">
          </div>
        </div>
        <div class="input_sections">
          <div class="input_section">
            <label for="email">ایمیل :</label>
            <br>
            <input type="email" name="email" id="email" class="edit_input" value="<?php echo $result['email']; ?>">
          </div>
          <div class="input_section">
            <label for="city">شهر محل سکونت :</label>
            <br>
            <select name="city" id="city" class="edit_input">
              <option value="esf" <?php if ($result['city']=="esf") {echo "selected";}?>>اصفهان</option>
              <option value="thr" <?php if ($result['city']=="thr") {echo "selected";} ?>>تهران</option>
              <option value="mhd" <?php if ($result['city']=="mhd") {echo "selected";}?>>مشهد</option>
              <option value="shr" <?php if ($result['city']=="shr") {echo "selected";}?>>شیراز</option>
              <option value="tbz" <?php if ($result['city']=="tbz") {echo "selected";}?>>تبریز</option>
            </select>
          </div>
        </div>
        <div class="input_sections">
          <div class="input_section">
            <label for="phone">موبایل :</label>
            <br>
            <input type="number" name="phone" id="phone" class="edit_input"  value="<?php echo $result['phone']; ?>">
          </div>
          <div class="input_section">
            <label for="password">رمز عبور :</label>
            <br>
            <input type="text" name="password" id="password" class="edit_input"  value="<?php echo $result['password']; ?>">
          </div>
        </div>
        <div class="input_sections">
          <button type="submit" class="filled-tonal-button">ثبت تغییرات</button>
        </div>
      </form>
    </div>
  </div>
</body>