<?php 
include '../config/config.php';
include '../config/db_auth.php';
session_start();
date_default_timezone_set('UTC');

$video = htmlspecialchars($_POST['video_id']);
$comment = htmlspecialchars($_POST['comment']);
$user = $_SESSION['username'];
$date = date('Y-m-d H:i:s');

$res = mysqli_query($conn, "INSERT INTO comment (poster, video_id, date, comment) VALUES('$user', '$video', '$date', '$comment')");
if ($res) {
    header('Location: ../../video.php?v=' . $video);
}

?>