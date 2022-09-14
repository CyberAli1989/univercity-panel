<?php
require_once "../vendor/autoload.php";
require_once "../inc/db.php";

unset($_SESSION['name']);
unset($_SESSION['id']);
header('location:../index.php');
