<?php 
include './libs/config/config.php';
include './libs/config/db_auth.php';
session_start();

include './libs/auth/checksession.php';

header('Location: ./profile.php?u=' . $_SESSION['username']);
?>
