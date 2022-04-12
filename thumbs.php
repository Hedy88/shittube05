<?php 
include './libs/config/config.php';
include './libs/config/db_auth.php';

if (!isset($_GET['thumb'])) {
    $er500file = './img/er500_thumb.png';
    $fp = fopen($er500file, 'rb');

    header("Content-Type: image/png");
    header("Content-Length: " . filesize($er500file));

    fpassthru($fp);
    exit;
} else if ($_GET['thumb'] === '') {
    $er500file = './img/er500_thumb.png';
    $fp = fopen($er500file, 'rb');

    header("Content-Type: image/png");
    header("Content-Length: " . filesize($er500file));

    fpassthru($fp);
    exit;
}

if ($_GET['thumb'] == 'none') {
    $nonefile = './img/no_thumb2.png';
    $fp = fopen($nonefile, 'rb');

    header("Content-Type: image/png");
    header("Content-Length: " . filesize($nonefile));

    fpassthru($fp);
    exit;
}

$thumb = htmlspecialchars($_GET['thumb']);
$thsql = mysqli_query($conn, "SELECT * FROM videos WHERE id = '$thumb'");
$row = mysqli_fetch_assoc($thsql);
$thumbnail = $row['thumb'];

$fopen = fopen($thumbnail, 'rb');


header("Content-Type: image/png");
header("Content-Length: " . filesize($thumbnail));
fpassthru($fopen);
exit();

?>