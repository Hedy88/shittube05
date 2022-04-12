<?php 
include '../../libs/config/config.php';
include '../../libs/config/db_auth.php';
include '../api_auth/token.php';
date_default_timezone_set('UTC');

$get = NULL;

if (!isset($_GET['msg'])) {
    $array->response = "Please set a message.";
    echo json_encode($array);
    die();
} else if (!isset($_GET['video_id'])) {
    $array->response = "Please set a video id.";
    echo json_encode($array);
    die();
}


$msg = htmlspecialchars($_GET['msg']);
$video_id = htmlspecialchars($_GET['video_id']);
$date = date('Y-m-d H:i:s');

PostComment($username, $conn, $msg, $video_id, $date);
if ($get === TRUE) {
    $array->response = "Comment Successfully Added.";
    $array->apiTokenAuth = "success";
    echo json_encode($array);
}

?>