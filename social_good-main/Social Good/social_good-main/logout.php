<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
session_unset();
session_destroy();
header('location: home.php');
?>