<?php
    $BaseUrl = 'http://localhost/websites/allyzent/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podium Clone</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="header clearfix">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="logo">
                    <img src="assets/images/logo.png">
                    <!-- <span>Podium</span>
                    <div class="logo-highlight"></div> -->
                </div>
                <div class="nav-links">
                    <a href="<?= $BaseUrl; ?>" class="nav-link active">Home</a>
                    <a href="<?= $BaseUrl; ?>auto.php" class="nav-link">Auto</a>
                    <a href="#" class="nav-link">Aesthetics & Wellness</a>
                    <a href="#" class="nav-link">Services</a>
                    <a href="#" class="nav-link">Retail</a>
                    <a href="#" class="nav-link">law Firam</a>
                </div>
                <div class="nav-right">
                    <div class="phone-number">
                        <i class="bi bi-telephone-fill phone-icon"></i>
                        <span>1-801-438-4425</span>
                    </div>
                    <a href="#" class="demo-btn">
                        Get a demo
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <div class="hamburger" id="hamburger">
                        <div class="hamburger-line"></div>
                        <div class="hamburger-line"></div>
                        <div class="hamburger-line"></div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="clr"></div>
        <!-- Mobile Menu -->
        <div class="mobile-menu clearfix" id="mobileMenu">
            <div class="mobile-menu-content">
                <a href="" class="mobile-link">Home</a>
                <a href="#" class="mobile-link">Aesthetics & Wellness</a>
                <a href="#" class="mobile-link">Home Services</a>
                <a href="#" class="mobile-link">Retail</a>
                <a href="#" class="mobile-link">Law Firms</a>
                <a href="#" class="mobile-link phone-link">
                    1-801-438-4425
                </a>
                <a href="#" class="demo-link">
                    Get a demo
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>