<?php
// Include database configuration
require_once 'includes/config.php';

// Variables for form feedback
$success = false;
$error = false;
$errorMessage = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get and sanitize form data
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $phone = $conn->real_escape_string(trim($_POST['phone']));
    $organization = $conn->real_escape_string(trim($_POST['organization']));
    $message = $conn->real_escape_string(trim($_POST['message']));
    
    // Server-side validation
    if (empty($name) || empty($email) || empty($phone)) {
        $error = true;
        $errorMessage = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $errorMessage = 'Please enter a valid email address.';
    } else {
        // Insert into database
        $sql = "INSERT INTO registrations (name, email, phone, organization, message) 
                VALUES ('$name', '$email', '$phone', '$organization', '$message')";
        
        if ($conn->query($sql) === TRUE) {
            $success = true;
            // Clear form data after successful submission
            $_POST = array();
        } else {
            $error = true;
            $errorMessage = 'Registration failed. Please try again.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Rainwater Convention</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <?php include 'includes/navbar.php'; ?>
    
    <main>
        <!-- Page Header -->
        <section class="bg-light py-5">
            <div class="container">
                <h1 class="text-center"><i class="bi bi-pencil-square"></i> Event Registration</h1>
                <p class="text-center text-muted">Fill out the form below to register for the convention</p>
            </div>
        </section>
        
        <!-- Registration Form Section -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        
                        <!-- Success Alert -->
                        <?php if ($success): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <strong>Success!</strong> Your registration has been submitted successfully. We'll contact you soon.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Error Alert -->
                        <?php if ($error): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <strong>Error!</strong> <?php echo $errorMessage; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Registration Form Card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Registration Form</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="registration.php" novalidate class="needs-validation">
                                    
                                    <!-- Name Field -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="name" 
                                            name="name" 
                                            placeholder="Enter your full name"
                                            required
                                            value="<?php echo isset($_POST['name']) && !$success ? htmlspecialchars($_POST['name']) : ''; ?>">
                                        <div class="invalid-feedback">
                                            Please enter your name.
                                        </div>
                                    </div>
                                    
                                    <!-- Email Field -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input 
                                            type="email" 
                                            class="form-control" 
                                            id="email" 
                                            name="email" 
                                            placeholder="your.email@example.com"
                                            required
                                            value="<?php echo isset($_POST['email']) && !$success ? htmlspecialchars($_POST['email']) : ''; ?>">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address.
                                        </div>
                                    </div>
                                    
                                    <!-- Phone Field -->
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input 
                                            type="tel" 
                                            class="form-control" 
                                            id="phone" 
                                            name="phone" 
                                            placeholder="+12345678"
                                            required
                                            value="<?php echo isset($_POST['phone']) && !$success ? htmlspecialchars($_POST['phone']) : ''; ?>">
                                        <div class="invalid-feedback">
                                            Please enter your phone number.
                                        </div>
                                    </div>
                                    
                                    <!-- Organization Field (Optional) -->
                                    <div class="mb-3">
                                        <label for="organization" class="form-label">Organization <span class="text-muted">(Optional)</span></label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="organization" 
                                            name="organization" 
                                            placeholder="Your organization or company"
                                            value="<?php echo isset($_POST['organization']) && !$success ? htmlspecialchars($_POST['organization']) : ''; ?>">
                                    </div>
                                    
                                    <!-- Message Field (Optional) -->
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message <span class="text-muted">(Optional)</span></label>
                                        <textarea 
                                            class="form-control" 
                                            id="message" 
                                            name="message" 
                                            rows="4" 
                                            placeholder="Any additional information or questions..."><?php echo isset($_POST['message']) && !$success ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                                    </div>
                                    
                                    <!-- Submit Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="bi bi-check-circle me-2"></i>Submit Registration
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Additional Info -->
                        <div class="alert alert-info mt-4">
                            <i class="bi bi-info-circle me-2"></i>
                            <strong>Note:</strong> Fields marked with <span class="text-danger">*</span> are required.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Bootstrap Form Validation Script -->
    <script>
        // Bootstrap form validation
        (function() {
            'use strict';
            
            // Get the form
            var form = document.querySelector('.needs-validation');
            
            // Add submit event listener
            form.addEventListener('submit', function(event) {
                // Check if form is valid
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                
                // Add validation styles
                form.classList.add('was-validated');
            }, false);
        })();
    </script>
</body>
</html>
