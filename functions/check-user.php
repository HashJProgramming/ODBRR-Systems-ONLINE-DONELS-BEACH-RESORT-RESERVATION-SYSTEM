<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($user['type'] == 1) {
        header('location: ./dashboard.php');
    } else if ($user['type'] == 0) {
        header('location: ./staff.php');
    }
}
?>
