<?php 
include '../config/config.php';
include '../config/db_auth.php';
session_start();

// set some stuff
$user = $_SESSION['username'];
$post_aboutme = $_POST['lol'];

// sql 
$sql = "UPDATE users SET aboutme = '$post_aboutme' WHERE username = '$user'";
$result = mysqli_query($conn, $sql);

// lol
if ($result) {
    header('Location: ../../my_profile.php');
    die();
}
?>
