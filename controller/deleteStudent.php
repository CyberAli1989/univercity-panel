<?php

require_once '../vendor/autoload.php';
require_once '../inc/db.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$deleteStudent = Capsule::table('students')->delete($_GET['id']);

header('location:../students.php');