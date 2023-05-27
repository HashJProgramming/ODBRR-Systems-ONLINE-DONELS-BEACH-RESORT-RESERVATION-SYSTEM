<?php
// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // The user is logged in, redirect to the dashboard
    if ($user['type'] == 1) {
        header('location: ../dashboard.php');
    } else if ($user['type'] == 0) {
        header('location: ../staff.php');
    }
} else {
    // The user is not logged in, redirect to the login page
    header('Location: ../index.php');
}
?>
