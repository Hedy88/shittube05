<?php 
//config shit
include '../../libs/config/config.php';
include '../../libs/config/db_auth.php';

// functions
include '../funcs.php';

// composer
include '../../vendor/autoload.php';
header("Content-Type: application/json");

use Carbon\Carbon;
$get = NULL;
$count = 0;

ReturnRVVideos($conn);

while ($result = $get->fetch_assoc()) {
    $secsago = Carbon::parse($result['lastWatched'])->diffforhumans();
    $rr[$count] = array(
       'id' => $result['id'],
       'thumbnail' => 'http:/' . $sitename . '/thumbs.php?thumb=' . $result['id'],
       'title' => htmlspecialchars($result['title']),
       'secsago' => $secsago,
       'video_link' => htmlspecialchars($result['id']),
       'video_link' => 'http:/' . $sitename . '/video.php?v=' . $result['id']
    );
    $count = $count + 1;
}
echo json_encode($rr);

?>