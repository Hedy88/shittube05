<?php 
include '../libs/config/config.php';
include '../libs/config/db_auth.php';

header("Content-Type: application/json");
$array = new stdClass();

$array->response = "http://" . $sitename . "/devs.php";
echo json_encode($array);


?>