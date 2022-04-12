<?php 
include '../../libs/config/config.php';
include '../../libs/config/db_auth.php';

header("Content-Type: application/json");
$array = new stdClass();

if (isset($_GET['user'])) {
    $user = htmlspecialchars($_GET['u']);
    $apiquery = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user'");

    while ($row = mysqli_fetch_array($apiquery)) {
        $array->username = htmlspecialchars($row['username']);
        $array->recent_vid = htmlspecialchars($row['recent_vid']);
        $array->last_Login = htmlspecialchars($row['last_Login']); 
        $array->isBanned = htmlspecialchars($row['isBanned']);
        $array->aboutme = htmlspecialchars($row['aboutme']);
        $array->profile_link = "http://" . $sitename . "/profile.php?u=" . htmlspecialchars($row['username']);
        echo json_encode($array);
    }
} else {
    $array->responce = "Please request a name";
    echo json_encode($array);
}
?>