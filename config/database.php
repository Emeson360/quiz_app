<?php
require_once __DIR__ . '/constants.php';
include_once __DIR__ . '/../includes/alerts.php';

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "eass_cbt";


$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if(!$con) {
    echo "Connection error: " . mysqli_connect_error();
    die;
}