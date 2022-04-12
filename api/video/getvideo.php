<?php 
include '../../libs/config/config.php';
include '../../libs/config/db_auth.php';

header("Content-Type: application/json");
$array = new stdClass();

if (isset($_GET['v'])) {
    $video = htmlspecialchars($_GET['v']);
    $vsql = mysqli_query($conn, "SELECT * FROM videos WHERE id = '$video'");

    if (!$vsql) {
        $array->responce = "Error 500: Internal Server Error.";
        echo json_encode($array);
    }

    while ($row = mysqli_fetch_assoc($vsql)) {
        $array->title = htmlspecialchars($row['title']);
        $array->id = htmlspecialchars($row['id']);
        $array->thumb = "http://" . $sitename . "/thumbs.php?thumb=" . $row['id']; 
        $array->uploader = htmlspecialchars($row['uploaded_by']);
        $array->video_link = "http://" . $sitename . "/video.php?v=" . $row['id']; 
        $array->description = htmlspecialchars($row['description']);
        $array->uploaded_on = htmlspecialchars($row['uploaded_on']);
        echo json_encode($array);
    }
} else {
    $array->responce = "Please request a video.";
    echo json_encode($array);
}


?>