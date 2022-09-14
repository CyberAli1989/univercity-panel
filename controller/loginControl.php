<?php
require_once "../vendor/autoload.php";
require_once "../inc/db.php";
echo "<pre>";
print_r($_POST);

$user = $_POST['nid'];
$pass = md5(trim($_POST['password']));

$query = $capsule::table("students")->where("nid", $user)->where("password", $pass);


if ($query->count() == 0) {
    die("wrong pass or username");
}else{
    $student = $query->first();
    $_SESSION["id"] = $student->id;
    $_SESSION["name"] = $student->name . " " . " Welcome";
}
header("location:../index.php");