<?php
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Invictus - Online Courses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
 


    <!-- Navbar Start -->
   <?php include("include/header.php");?>
    <!-- Navbar End -->
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="video-banner">
                <video autoplay loop muted playsinline class="position-relative w-100" style="object-fit: cover; min-height: 500px;">
                    <source src="video/banner.mp4" type="video/mp4">
                    <source src="video/banner.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="carousel-item active" style="min-height: 500px;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-md-3">ABOUT US</h2>
                        <p>Invictus Consulting Services, a premier study abroad company in Bangalore, specializes in university applications, visa processes, training, and internships for top universities worldwide. Transform your international education dreams into reality with our expert guidance and comprehensive support.</p>
                        <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="min-height: 500px;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-md-3">Services we provide</h2>
                        <p>University applications</p>
                        <p>Visa processing</p>
                        <p>Training for GRE, IELTS, TOEFL, SAT, and GMAT</p>
                        <p>Securing internships</p>
                        <a href="services.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="min-height: 500px;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-md-3">Blogs</h2>
                        <p>Stay informed and inspired about your study abroad journey by reading our expert blogs on university applications, visa processes, and international student experiences.</p>
                        <a href="#" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>