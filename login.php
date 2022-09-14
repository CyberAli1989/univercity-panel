<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $title = "صفحه ورود";
    include "links.php";
    ?>
</head>
<body>
<?php include "nav.php"; ?>

<?php

?>
<div class="container">
    <form class="w-75 my-5 mx-auto" action="controller/loginControl.php" method="post">
        <div class="form-group">
            <label for="userName">
                کد ملی
            </label>
            <input type="text" id="userName" name="nid" value="" placeholder="کد ملی" class="form-control my-2">
        </div>
        <div class="form-group">
            <label for="pass">
                رمز عبور
            </label>
            <input type="password" id="pass" name="password" value="" placeholder="رمز عبور" class="form-control my-2">
        </div>
        <button class="btn btn-primary my-3 w-100">ورود</button>
    </form>
</div>
</body>
</html>