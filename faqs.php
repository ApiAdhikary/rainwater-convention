<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - Rainwater Convention</title>
    
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
                <h1 class="text-center"><i class="bi bi-question-circle"></i> Frequently Asked Questions</h1>
                <p class="text-center text-muted">Find answers to common questions about the convention</p>
            </div>
        </section>
        
        <!-- FAQs Accordion Section -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- FAQ Accordion -->
                        <div class="accordion" id="faqAccordion">
                            
                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        What is the Rainwater Convention?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        The Rainwater Convention is an annual gathering of professionals, researchers, and enthusiasts focused on sustainable rainwater harvesting, conservation, and water management practices. It features keynote speeches, workshops, and networking opportunities.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        When and where is the convention held?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        The convention will be held on December 15-17, 2025, at the Convention Center in City Hall. The event runs from 9:00 AM to 5:00 PM each day.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        How do I register for the event?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        You can register online through our <a href="registration.php">Registration Page</a>. Simply fill out the required information including your name, email, and phone number. You'll receive a confirmation email after successful registration.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Question 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                        Is there a registration fee?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, there is a registration fee of $150 per person, which includes access to all sessions, workshops, lunch, and conference materials. Early bird discounts are available for registrations completed before December 10, 2025.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Question 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                        Who should attend this convention?
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        The convention is ideal for water resource managers, environmental engineers, sustainability consultants, government officials, researchers, NGO representatives, and anyone interested in rainwater harvesting and water conservation.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Question 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                        What topics will be covered?
                                    </button>
                                </h2>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Topics include rainwater harvesting systems design, water quality management, policy and regulations, climate change adaptation, urban water management, innovative technologies, and case studies from around the world.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Question 7 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                        Will certificates be provided?
                                    </button>
                                </h2>
                                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, all registered participants who attend the full convention will receive a certificate of attendance. Professional development credits may also be available for certain professions.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Question 8 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                        Can I cancel my registration?
                                    </button>
                                </h2>
                                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, cancellations made before December 12, 2025 will receive a full refund minus a $25 processing fee. Cancellations after this date are non-refundable, but you may transfer your registration to another person.
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- Still Have Questions? -->
                        <div class="card mt-5">
                            <div class="card-body text-center">
                                <h4>Still have questions?</h4>
                                <p>Feel free to contact us or register for the event</p>
                                <a href="registration.php" class="btn btn-primary">Register Now</a>
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
