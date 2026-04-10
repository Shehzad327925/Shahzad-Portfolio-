<?php
// Function to check active page
function is_active($page) {
    if (basename($_SERVER['PHP_SELF']) == $page) {
        return 'active';
    }
    return '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shahzad Habib - Web Developer Portfolio</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<header class="header">
    <div class="container">
        <a href="index.php" class="logo">
            <!-- Add your logo image or text here -->
        </a>
        
        <div class="mobile-toggle" id="mobile-toggle">
            <i class="fas fa-bars"></i>
        </div>

        <nav>
            <ul class="nav-links" id="nav-links">
                <li class="<?php echo is_active('index.php'); ?>"><a href="index.php">Home</a></li>
                <li class="<?php echo is_active('about.php'); ?>"><a href="about.php">About</a></li>
                <li class="<?php echo is_active('portfolio.php'); ?>"><a href="portfolio.php">Portfolio</a></li>
                <li class="<?php echo is_active('blog.php'); ?>"><a href="blog.php">Blog</a></li>
                <li class="<?php echo is_active('contact.php'); ?>"><a href="contact.php">Contact</a></li>
                <li><a href="#hire" class="btn btn-primary" style="padding: 8px 24px;">Hire Me</a></li>
            </ul>
        </nav>
    </div>
</header>

<main style="padding-top: 80px;">
