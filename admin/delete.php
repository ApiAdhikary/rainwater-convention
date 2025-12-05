<?php
// Start session
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Include database configuration
require_once '../includes/config.php';

// Check if ID is provided
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Delete the registration
    $sql = "DELETE FROM registrations WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect back to dashboard with success message
        header('Location: dashboard.php?deleted=success');
    } else {
        // Redirect back with error message
        header('Location: dashboard.php?deleted=error');
    }
} else {
    // Invalid ID, redirect back
    header('Location: dashboard.php');
}

exit;
?>
