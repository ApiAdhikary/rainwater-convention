<?php
// Database configuration file
// This file connects to MySQL database

// Database credentials
define('DB_HOST', 'localhost');      // Database host (usually localhost)
define('DB_USER', 'root');           // Database username (default for XAMPP)
define('DB_PASS', '');               // Database password (empty for XAMPP)
define('DB_NAME', 'rainwater_convention'); // Database name

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8
$conn->set_charset("utf8");

?>
