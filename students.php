<?php
require_once 'vendor/autoload.php';
require_once 'inc/db.php';
require_once 'inc/tDate.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$students = Capsule::table("students")->get();

$date = new TDate();
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $title = "مشاهده دانشجویان"; ?>
    <?php include "links.php"; ?>
</head>
<body>
<?php include "nav.php" ?>

<div class="container">
    <table class="table table-bordered table-striped w-100 align-middle mx-auto text-center my-5">
        <tr>
            <th>#</th>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>کد ملّی</th>
            <th>کد دانشجویی</th>
            <th>تاریخ تولد</th>
            <th>ادرس</th>
            <th>موبال</th>
            <th>مقطع</th>
            <th>رشته</th>
            <th>-</th>
        </tr>
        <?php foreach ($students as $student):?>
            <tr>
                <td><?php echo $student->id ?></td>
                <td><?php echo $student->name ?></td>
                <td><?php echo $student->lastname ?></td>
                <td><?php echo $student->nid ?></td>
                <td><?php echo $student->code ?></td>
                <td><?php echo $date->PDate('Y/F/d l', $student->dob); ?></td>
                <td><?php echo $student->address ?></td>
                <td><?php echo $student->mobile ?></td>
                <td><?php echo $student->grade ?></td>
                <td><?php echo $student->field ?></td>
                <td>
                    <a class="btn btn-danger my-2" href="controller/deleteStudent.php?id=<?php echo $student->id ?>">DELETE</a>
                    <a class="btn btn-warning my-2" href="editStudent.php?id=<?php echo $student->id ?>">EDIT</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>
</body>
</html>