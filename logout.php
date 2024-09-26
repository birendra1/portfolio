<?php
// Start session
session_start();

// Unset logged_in session variable
unset($_SESSION['logged_in']);

// Redirect to login page
header('Location: login.php');
exit;
?>