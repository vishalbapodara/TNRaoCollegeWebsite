<?php
session_start(); // Start the session

session_unset();
// Destroy the session
session_destroy();

// Redirect to the login page or any other page
header("Location: /Work/tnraoCollge/index.php");
?>