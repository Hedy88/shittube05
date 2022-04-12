<?php 
include '../config/config.php';
include '../config/db_auth.php';
session_start();

$username = $_SESSION['username'];
$bytes = random_bytes(16);
$newkey = bin2hex($bytes);

$sql = mysqli_query($conn, "UPDATE users SET apiKey = '$newkey' WHERE username = '$username'");

if ($sql) {
    header('Location: ../../api_key.php');
}
?>