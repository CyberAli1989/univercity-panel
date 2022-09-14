<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $title = "افزودن دانشجو";
    require_once "vendor/autoload.php";
    require_once "inc/db.php";
    include "links.php";
    ?>
</head>
<body>
<?php include "nav.php";?>

<?php if (isset($_SESSION['name'])): ?>
<div class="container">
    <form action="controller/addStudent.php" method="post">
        <div class="form-group my-3">
            <label for="name">
                نام
            </label>
            <input type="text" id="name" name="name" value="" placeholder="نام" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="lastname">
                نام خانوادگی
            </label>
            <input type="text" id="lastname" name="lastname" value="" placeholder="نام خانوادگی" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="code">
                کد دانشحویی
            </label>
            <input type="text" id="code" name="code" value="" placeholder="کد دانشجویی" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="nid">
                کد ملی
            </label>
            <input type="text" id="nid" name="nid" value="" placeholder="کد دانشجویی" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="password">
                پسورد
            </label>
            <input type="password" id="password" name="pass1" value="" placeholder="پسورد" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="password2">
                تکرار پسورد
            </label>
            <input type="password" id="password2" name="pass2" value="" placeholder="تکرار پسورد" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="dob">
                تاریخ نولد
            </label>
            <input type="text" id="dob" name="dob" value="" placeholder="تاریخ نولد" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="address">
                ادرس
            </label>
            <textarea placeholder="ادرس" name="address" id="address" rows="3" class="form-control"></textarea>
        </div>
        <div class="form-group my-3">
            <label for="mobile">
                تلفن همراه
            </label>
            <input type="text" id="mobile" name="mobile" value="" placeholder="تلفن همراه" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="grade">
                مقطع
            </label>
            <select class="form-control" name="grade" id="grade">
                <option value="">انتخاب کنید</option>
                <option value="کارشناسی">کارشناسی</option>
                <option value="ارشد">ارشد</option>
                <option value="کاردانی">کاردانی</option>
                <option value="دکتری">دکتری</option>
            </select>
        </div>
        <div class="form-group my-3">
            <label for="field">
                رشته
            </label>
            <input type="text" id="field" name="field" value="" placeholder="رشته" class="form-control">
        </div>
        <button class="btn btn-success my-3">ثبت دانشجو</button>
    </form>
</div>
<?php endif; ?>
</body>
</html>