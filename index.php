<?php
session_start();
require_once 'config/database.php';
require_once 'includes/functions.php';

// Fetch data from MySQL using the cleaned-up functions
$projects        = getProjects($pdo);
$skills          = getSkills($pdo);
$certifications  = getCertifications($pdo);

// Handle contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {
    $result = submitContactForm($pdo, $_POST);

    $_SESSION['message'] = $result['message'];
    $_SESSION['message_type'] = $result['success'] ? 'success' : 'error';

    // Redirect to clear POST data
    header('Location: index.php#contact');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional portfolio of a Computer Science teacher and IT professional specializing in web development and educational technology.">
    <meta name="keywords" content="Computer Science teacher, IT professional, web development, education, portfolio, programming">
    <meta name="author" content="Professional Educator & IT Specialist">
    <title>Professional Portfolio - Computer Science Teacher & IT Specialist</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#home">
                <i class="fas fa-graduation-cap me-2"></i>Portfolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#certifications">Certifications</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    <main>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="container mt-5 pt-4">
                <div class="alert alert-<?= $_SESSION['message_type'] === 'success' ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                    <?= sanitizeOutput($_SESSION['message']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
            <?php unset($_SESSION['message'], $_SESSION['message_type']); ?>
        <?php endif; ?>

        <!-- Hero Section -->
        <section id="home" class="hero-section d-flex align-items-center min-vh-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-3">
                            Professional Educator & <span class="text-primary">IT Specialist</span> 
                            <h3 class="text-secondary"> Building a Digital Future</span></h3>
                        </h1>
                        <p class="lead mb-4">
                            Bridging the gap between education and technology, I am a seasoned computer science educator and IT professional. With over six years of experience, I specialize in teaching programming, web development, and digital solutions, empowering the next generation of innovators with practical, in-demand skills.
                        </p>
                        <div class="hero-stats row g-3 mb-4">
                            <div class="col-sm-3">
                                <h3 class="h4 text-primary mb-0">10+</h3>
                                <small class="text-secondary">Years Teaching</small>
                            </div>
                            <div class="col-sm-3">
                                <h3 class="h4 text-primary mb-0"><?= count($projects); ?></h3>
                                <small class="text-muted">Projects</small>
                            </div>
                            <div class="col-sm-3">
                                <h3 class="h4 text-primary mb-0"><?= count($certifications); ?></h3>
                                <small class="text-muted">Certifications</small>
                            </div>
                            <div class="col-sm-3">
                                <h3 class="h4 text-primary mb-0"><?= count($skills); ?></h3>
                                <small class="text-muted">Skills</small>
                            </div>
                        </div>
                        <a href="#projects" class="btn btn-primary btn-lg me-3">View Projects</a>
                        <a href="#contact" class="btn btn-outline-secondary btn-lg">Contact</a>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="assets/images/hero.jpg" class="img-fluid" alt="Portfolio Graphic">
                    </div>
                </div>
            </div>
        </section>

        <!-- Sections -->
        <?php include 'includes/header.php'; ?>
        <?php include 'includes/about.php'; ?>
        <?php include 'includes/skills.php'; ?>
        <?php include 'includes/certifications.php'; ?>
        <?php include 'includes/projects.php'; ?>
        <?php include 'includes/contact.php'; ?>        
        <?php include 'includes/footer.php'; ?>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
