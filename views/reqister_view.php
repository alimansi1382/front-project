<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="grid-100">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>
    <main id="container">
        <section class="page_content">
            <div id="form_title">ثبت نام</div>
            <hr>
            <form action="#" method="post" id="login_form">
                <div class="input_material_block">
                    <input type="text" name="firstname" id="firstname">
                    <label for="firstname">نام :</label>
                </div>
                <div class="input_material_block">
                    <input type="text" name="lastname" id="lastname">
                    <label for="lastname">نام خوانوادگی :</label>
                </div>
                <div class="input_material_block">
                    <input type="email" name="email" id="email">
                    <label for="email">ايميل :</label>
                </div>
                <div class="input_material_block active">
                    <select name="citi" id="citi" class="register_input">
                        <option value="esf">اصفهان</option>
                        <option value="thr">تهران</option>
                        <option value="mhd">مشهد</option>
                        <option value="shr">شیراز</option>
                        <option value="tbz">تبریز</option>
                    </select>
                    <label for="citi">شهر :</label>
                </div>
                <div class="input_material_block">
                    <input type="number" name="phone" id="phone" >
                    <label for="phone">موبایل :</label>
                </div>
                <div class="input_material_block">
                    <input type="password" name="password" id="password">
                    <label for="password">رمز عبور :</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">ثبت نام</button>
            </form>
            
        </section>   
    </main>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>