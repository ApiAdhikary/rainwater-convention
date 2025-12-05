<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rainwater Convention 2025</title>
    
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
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <h1><i class="bi bi-cloud-rain"></i> Rainwater Convention</h1>
                <p class="lead">Join us for the premier event on sustainable water management</p>
                <a href="registration.php" class="btn btn-light btn-lg">Register Now</a>
            </div>
        </section>
        
        <!-- Convention Details Section -->
        <section class="py-5">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col">
                        <h2>About the Convention</h2>
                        <p class="text-muted">Learn about sustainable rainwater harvesting and conservation</p>
                    </div>
                </div>
                
                <!-- Info Cards -->
                <div class="row g-4">
                    <!-- Date Card -->
                    <div class="col-md-4">
                        <div class="card info-card">
                            <div class="card-body text-center">
                                <i class="bi bi-calendar-event text-primary" style="font-size: 3rem;"></i>
                                <h4 class="card-title mt-3">Date</h4>
                                <p class="card-text">December 15-17, 2025</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Location Card -->
                    <div class="col-md-4">
                        <div class="card info-card">
                            <div class="card-body text-center">
                                <i class="bi bi-geo-alt text-primary" style="font-size: 3rem;"></i>
                                <h4 class="card-title mt-3">Location</h4>
                                <p class="card-text">Convention Center, City Hall</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Participants Card -->
                    <div class="col-md-4">
                        <div class="card info-card">
                            <div class="card-body text-center">
                                <i class="bi bi-people text-primary" style="font-size: 3rem;"></i>
                                <h4 class="card-title mt-3">Participants</h4>
                                <p class="card-text">500+ Expected Attendees</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Why Attend Section -->
                <div class="row mt-5">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Why Attend?</h3>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Learn from industry experts and researchers</li>
                                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Network with professionals and organizations</li>
                                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Discover innovative rainwater harvesting technologies</li>
                                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Share best practices in water conservation</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Participate in hands-on workshops and demonstrations</li>
                                </ul>
                            </div>
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
</body>
</html>
