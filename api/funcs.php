<?php 
// api functions!
// 

function ValidateKey($apiKey, $conn) {
    global $result;
	global $get;
    $keySQL = $conn->prepare("SELECT * FROM users WHERE apiKey = ?");
    $keySQL->bind_param('s', $apiKey);
    $keySQL->execute();
    $get = $keySQL->get_result();
	$result = $get->fetch_assoc();
    return $get;
    return $result;
}

function PostComment($username, $conn, $msg, $video_id, $date) {
    global $get;
    $commentSQL = $conn->prepare("INSERT INTO comment (poster, video_id, date, comment) VALUES(?, ?, ?, ?)");
    $commentSQL->bind_param('ssss', $username, $video_id, $date, $msg);
    $commentSQL->execute();
    $get = $commentSQL->get_result();
    return $get;
}

function ReturnRVVideos($conn) {
    global $get;
    $rSQL = $conn->prepare("SELECT * FROM videos ORDER BY lastWatched DESC LIMIT 5");
    $rSQL->execute();
    $get = $rSQL->get_result();
    return $get;
}

?>