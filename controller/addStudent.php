<?php
require_once "../vendor/autoload.php";
require_once "../inc/db.php";


if ($_POST['pass1'] != $_POST['pass2']) {
    header('location: students.php');
    $_SESSION['error'] = 'Password not same';
    die();
} else {
    $_POST['password'] = md5($_POST['pass1']);
    unset($_POST['pass1']);
    unset($_POST['pass2']);
}

echo "<pre>";
print_r($_POST);

$id = $capsule::table('students')->insertGetId($_POST);