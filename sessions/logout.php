<?php


// Unset all of the session variables
session_start();
// Destroy username.
unset($_SESSION["email"]);

// Redirect to login page
header("location:../dashboard.php");
exit;
?>