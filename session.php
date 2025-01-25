<?php
session_start();

// Check if the session variable is set, then destroy it
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']); // Unset the session variable
    session_destroy(); // Destroy the entire session if needed
}

// Redirect back to homepage or another page
header("Location: login.php"); // Adjust to the desired page
exit();
?>