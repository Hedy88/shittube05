<?php 
include '../../libs/config/config.php';
include '../../libs/config/db_auth.php';

header("Content-Type: application/json");
$array = new stdClass();

$fsql = mysqli_query($conn, "SELECT * FROM `videos` ORDER BY `uploaded_on`");

if (!$fsql) {
    $array->responce = "Error 500: Internal Server Error.";
    echo json_encode($array);
}

$count = 0;
while ($row = mysqli_fetch_assoc($fsql)) {
    $rr[$count] = array('title' => htmlspecialchars($row['title']), 'id' => $row['id'] ,'uploaded_on' => $row['uploaded_on'], 'thumb' => "http://" . $sitename . "/thumbs.php?thumb=" . $row['id'], 'uploader' => htmlspecialchars($row['uploaded_by']), 'description' => htmlspecialchars($row['description']), 'video_link' => "http://" . $sitename . "/video.php?v=" . $row['id']);
    $count = $count + 1;
}

echo json_encode($rr);
?>