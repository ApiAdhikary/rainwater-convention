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

// Get all registrations from database
$sql = "SELECT * FROM registrations ORDER BY created_at DESC";
$result = $conn->query($sql);

// Count total registrations
$totalRegistrations = $result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Rainwater Convention</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Admin Navigation Bar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">
                <i class="bi bi-speedometer2"></i> Admin Dashboard
            </span>
            <div class="d-flex">
                <span class="navbar-text text-white me-3">
                    <i class="bi bi-person-circle"></i> <?php echo htmlspecialchars($_SESSION['admin_username']); ?>
                </span>
                <a href="logout.php" class="btn btn-outline-light btn-sm">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </div>
        </div>
    </nav>
    
    <main class="py-4">
        <div class="container-fluid">
            
            <!-- Page Header -->
            <div class="row mb-4">
                <div class="col">
                    <h2>Registration Management</h2>
                    <p class="text-muted">View and manage all event registrations</p>
                </div>
            </div>
            
            <!-- Statistics Card -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-people-fill"></i> Total Registrations</h5>
                            <h2 class="mb-0"><?php echo $totalRegistrations; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Registrations Table -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0"><i class="bi bi-table"></i> All Registrations</h4>
                        </div>
                        <div class="card-body">
                            
                            <?php if ($totalRegistrations > 0): ?>
                            
                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Organization</th>
                                            <th>Message</th>
                                            <th>Registration Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = $result->fetch_assoc()): ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                                            <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                            <td><?php echo $row['organization'] ? htmlspecialchars($row['organization']) : '<em class="text-muted">N/A</em>'; ?></td>
                                            <td>
                                                <?php 
                                                if ($row['message']) {
                                                    $message = htmlspecialchars($row['message']);
                                                    echo strlen($message) > 50 ? substr($message, 0, 50) . '...' : $message;
                                                } else {
                                                    echo '<em class="text-muted">N/A</em>';
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                                            <td>
                                                <button 
                                                    class="btn btn-danger btn-sm" 
                                                    onclick="deleteRegistration(<?php echo $row['id']; ?>)">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <?php else: ?>
                            
                            <!-- No Registrations Message -->
                            <div class="alert alert-info" role="alert">
                                <i class="bi bi-info-circle me-2"></i>
                                No registrations found. Check back later!
                            </div>
                            
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    
    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Delete Confirmation Script -->
    <script>
        function deleteRegistration(id) {
            // Confirm deletion
            if (confirm('Are you sure you want to delete this registration? This action cannot be undone.')) {
                // Redirect to delete script
                window.location.href = 'delete.php?id=' + id;
            }
        }
    </script>
</body>
</html>
