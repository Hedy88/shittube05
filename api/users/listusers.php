<?php
include '../../libs/config/config.php';
include '../../libs/config/db_auth.php';

header("Content-Type: application/json");
$array = new stdClass();
$apiquery = mysqli_query($conn, "SELECT * FROM users");
$count = 0;

if (!$apiquery) {
    $array->responce = "Error 500: Internal Server Error.";
    echo json_encode($array);
}

while ($row = mysqli_fetch_array($apiquery)) {
    $rr[$count] = array(
        'username' => htmlspecialchars($row['username']), 
        'recent_vid' => $row['recent_vid'],
        'lastLogin' => $row['lastLogin'], 
        'isBanned' =>  $row['isBanned'],
        'aboutme' => htmlspecialchars($row['aboutme']),
        'profile_link' => "http://" . $sitename . "/profile.php?u=" . htmlspecialchars($row['username'])
    );
    $count = $count + 1;
}
echo json_encode($rr);
?>