<?php 
header("Content-Type: application/json");
include '../funcs.php';
$array = new stdClass();

if (!isset($_GET['token'])) {
    $array->response = 'API Key Required';
    echo json_encode($array);
    exit();
}

if (isset($_GET['token'])) {
$apiKey = htmlspecialchars($_GET['token']);
$get = NULL;
$result = NULL;

ValidateKey($apiKey, $conn);
switch(true) {
    case $get->num_rows == 0;
        $array->response = "apiKey Invaild.";
        echo json_encode($array);
        exit();
    break; 
}
}
$username = $result['username'];


?>