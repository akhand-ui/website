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
	<div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
          <div class="carousel-item active">

            <section class="video">
			<style>
        .video-container {
            width: 100%;
            max-width: 1000px;
            margin: 60px auto;
            border-radius: 20px;
            overflow: hidden;
            
        }
        video {
            width: 100%;
            height: 400px;
        }
    </style>
              <video class="vidchaVideo" autoplay="" loop="" muted="" style="width: 100%;max-height: 700px;">
                <source src="img/1.mp4" id="vid" type="video/mp4">
              </video>
            </section>

          </div>

        </div>
		<style>
        .video-container {
            width: 100%;
            max-width: 1000px;
            margin: 60px auto;
            border-radius: 20px;
            overflow: hidden;
            
        }
        video {
            width: 100%;
            height: 400px;
        }
    </style>
           <!--  <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol> -->
            <!--<div class="video-banner">
			<video class="vidchaVideo" autoplay="" loop="" muted="" style="width: 100%;max-height: 550px;">
                <video autoplay loop muted playsinline class="position-relative w-100" style="object-fit: cover; max-height: 550px;">
                    <source src="img/invictus-1.mp4" type="video/mp4">
                   <!-- <source src="video/banner.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
            </div> -->

    <!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <!-- 
        <div class="video-banner">
            <video autoplay loop muted playsinline class="position-relative w-100" style="object-fit: cover; max-height: 650px;">
                <source src="img/invictus.mp4" type="video/mp4">
                <source src="video/banner.webm" type="video/webm">
                Your browser does not support the video tag.
            </video>
        </div> 
        -->
        <style>
            .text-xs {
                font-size: 20px !important; /* Example size, adjust as needed */
                font-family: 'Arial', sans-serif; /* Example font, adjust as needed */
                text-align: justify;
                padding-left: 200px; /* Add 10px padding to the left */
            }
            .carousel-caption {
                justify-content: flex-start !important; /* Align container items to the left */
                text-align: left; /* Align text inside the container to the left */
            }
        </style>
        <div class="carousel-inner" style="background:url('img/banner.png');">
            <div class="carousel-item active" style="min-height: 500px;">
                <div class="carousel-caption d-flex align-items-center justify-content-start">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-md-3 text-xs">ABOUT US</h2>
                        <p class="text-xs">
                            Invictus Consulting Services, a premier study abroad company in Bangalore, specializes in university applications, visa processes, training, and internships for top universities worldwide. Transform your international education dreams into reality with our expert guidance and comprehensive support.
                        </p>
                        <a href="about.php" class="btn btn-primary py-md-2  font-weight-semi-bold mt-2 "style="margin-left: 200px;" >Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="min-height: 500px;">
                <div class="carousel-caption d-flex align-items-center justify-content-start">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-md-3 text-xs">Services we provide</h2>
                        <p class="text-xs">University applications</p>
                        <p class="text-xs">Visa processing</p>
                        <p class="text-xs">Training for GRE, IELTS, TOEFL, SAT, and GMAT</p>
                        <p class="text-xs">Securing internships</p>
                        <a href="servicrs.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2 "style="margin-left: 200px;">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="min-height: 500px;">
                <div class="carousel-caption d-flex align-items-center justify-content-start">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-md-3 text-xs">Blogs</h2>
                        <p class="text-xs">
                            Stay informed and inspired about your study abroad journey by reading our expert blogs on university applications, visa processes, and international student experiences.
                        </p>
                        <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2 "style="margin-left: 200px;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





            <!-- <div class="col-md-6 carousel-image" style="float:right;padding: 20px !important;">
                <p>Invictus Consulting Services is a leading study abroad company based in Bangalore that helps students realize their dream of studying abroad. Our team of experienced consultants provides personalized guidance and support to help students navigate the complex process of studying abroad. We offer a wide range of services including Training, Internships, university selection, application assistance, visa guidance, pre-departure orientation and accommodation.</p>
                <p>Invictus Consulting Services is a leading study abroad company based in Bangalore that helps students realize their dream of studying abroad. Our team of experienced consultants provides personalized guidance and support to help students navigate the complex process of studying abroad. We offer a wide range of services including Training, Internships, university selection, application assistance, visa guidance, pre-departure orientation and accommodation.</p>
            </div> -->
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start 
    <div class="container-fluid py-5 about-us">
        <div class="container py-5 about-us">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Invictus Consulting Services</h1>
                    </div>
                    <h5>“DISCOVER A WORLD OF OPPORTUNITIES WITH INVICTUS CONSULTING SERVICES – YOUR PARTNER IN GLOBAL EDUCATION.”</h5>
                    <p>Invictus Consulting Services is a leading study abroad consultancy based in Bangalore, dedicated to helping students realize their dream of international education. Our team of experienced consultants provides personalized guidance and support, assisting students in navigating the complex process of studying overseas. </p>
                    <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2" style="padding-left: 20px; width: auto; display: inline-block;">Read More</a>

                </div>
            </div>
        </div>
    </div> 
    About End -->

    <div class="container py-5 about-us" style="text-align: left;">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                    <h1>Invictus Consulting Services</h1>
                </div>
                <style>
                    .text-xl {
                        font-size: 20px !important; /* Example size, adjust as needed */
                        font-family: 'Arial', sans-serif; /* Example font, adjust as needed */
                        text-align: justify;
                        padding-left: 0; /* Ensure there is no left padding */
                    }
                </style>
                <h5>“DISCOVER A WORLD OF OPPORTUNITIES WITH INVICTUS CONSULTING SERVICES – YOUR PARTNER IN GLOBAL EDUCATION.”</h5>
                <p class="text-xl">
                    Invictus Consulting Services is a leading study abroad consultancy based in Bangalore, dedicated to helping students realize their dream of international education. Our team of experienced consultants provides personalized guidance and support, assisting students in navigating the complex process of studying overseas.
                </p>
                <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2" style="margin-left: 0;">Read More</a>
            </div>
        </div>
    </div>




    <!-- Category Start -->
    <div class="container-fluid py-5 choose-us">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Why us</h5>
                <h1>Why Choose Us ?</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Professional Advice</h4>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Affordable Pricing</h4>
                            <span> </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Experienced Consultants</h4>
                            <span> </span>
                        </a>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-5.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Personalized SOP and LOR Assistance</h4>
                            <span> </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-6.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">100% Visa Success Rate</h4>
                            <span> </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-7.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">End-to-End Support</h4>
                            <span> </span>
                        </a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Category Start -->


    <!-- Courses Start -->
    <div class="container-fluid py-5 services" style="padding:0px !important;">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">We Offer</h5>
                <h1>SERVICES WE PROVIDE AT INVICTUS</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-1.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <!-- <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div> -->
                            <a class="h5" href="services.php">University Selection</a>
                            <p>At Invictus Consulting Services, we recognize that choosing the right university is a crucial decision for students aspiring to pursue education abroad. Our comprehensive university selection services are designed to simplify this critical process, ensuring that students find the best fit...</p>
                            <a href="services.php" style="color:#ffffff;">Read More</a>
                            <!-- <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-2.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <!-- <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div> -->
                            <a class="h5" href="services.php">Application Assistance</a>
                            <p>At Invictus Consulting Services, we understand that the university application process can be daunting and overwhelming for students. That’s why we offer comprehensive university application services to help students navigate the process with ease. Our team of experienced consultants...</p>
                            <a href="services.php" style="color:#ffffff;">Read More</a>
                            <!-- <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-3.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <!-- <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div> -->
                            <a class="h5" href="services.php">Visa Guidance</a>
                           <p>When applying to study abroad, the visa process can often be one of the most complicated and intimidating steps for students. At Invictus Consulting Services, we recognize the importance of having a smooth visa application experience and offer comprehensive visa assistance services to...</p>
                           <a href="services.php" style="color:#ffffff;">Read More</a>
                           <!-- <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-4.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <!-- <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div> -->
                            <a class="h5" href="services.php">Training Programs
                            </a>
                            <p>At Invictus Consulting Services, we understand that competitive exams play a crucial role in the study abroad application process. That’s why we offer comprehensive exam preparation services to help students achieve their best possible scores. Our team of experienced trainers...</p>
                            <a href="services.php" style="color:#ffffff;">Read More</a>
                            <!-- <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-5.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <!-- <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div> -->
                            <a class="h5" href="services.php">Internship Placements
                            </a>
                            <p>At Invictus Consulting Services, we understand the importance of having relevant work experience to gain admission to a top university abroad. That is why we offer comprehensive internship placement services to help students secure internships in their relevant field Our team of experienced...</p>
                            <a href="services.php" style="color:#ffffff;">Read More</a>
                            <!-- <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-6.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <!-- <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div> -->
                            <a class="h5" href="services.php">Pre & Post-Arrival Support
                            </a>
                            <p>At Invictus Consulting Services, we understand that preparing for a study abroad experience involves more than just securing admission to a university. Our comprehensive pre-departure and post-arrival assistance services are designed to ensure that students have a smooth transition and successful...</p>
                            <a href="services.php" style="color:#ffffff;">Read More</a>
                            <!-- <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 0px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Planning to Study Abroad?</h5>
                        <h1 class="text-white">Get 30% Off on Our Services for New Students!</h1>
                    </div>
                    <p class="text-white">At Invictus Consulting Services, we understand that your dream of studying abroad is a significant step towards a bright future. To make this journey smoother, we are offering a 30% discount on our consultation services for all new students.</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Expert guidance on university selection and application processes.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Assistance with visa applications and financial planning.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Tailored support to match your academic and career goals.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h2 class="m-0">Sign up for a free counselling session today!</h2>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your phone" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Course interested" required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	  <?php include('testimonials.php');?>


   <?php include('blog-code.php');?>

    <!-- Footer Start -->
 <?php include("include/footer.php");?>
</body>

</html>
    <!-- Registration End -->


    <!-- Team Start -->
    <!--<div class="container-fluid py-5">-->
    <!--    <div class="container pt-5 pb-3">-->
    <!--        <div class="text-center mb-5">-->
    <!--            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>-->
    <!--            <h1>Meet Our Teachers</h1>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-6 col-lg-3 text-center team mb-4">-->
    <!--                <div class="team-item rounded overflow-hidden mb-2">-->
    <!--                    <div class="team-img position-relative">-->
    <!--                        <img class="img-fluid" src="img/team-1.jpg" alt="">-->
    <!--                        <div class="team-social">-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="bg-secondary p-4">-->
    <!--                        <h5>Jhon Doe</h5>-->
    <!--                        <p class="m-0">Web Designer</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-6 col-lg-3 text-center team mb-4">-->
    <!--                <div class="team-item rounded overflow-hidden mb-2">-->
    <!--                    <div class="team-img position-relative">-->
    <!--                        <img class="img-fluid" src="img/team-2.jpg" alt="">-->
    <!--                        <div class="team-social">-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="bg-secondary p-4">-->
    <!--                        <h5>Jhon Doe</h5>-->
    <!--                        <p class="m-0">Web Designer</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-6 col-lg-3 text-center team mb-4">-->
    <!--                <div class="team-item rounded overflow-hidden mb-2">-->
    <!--                    <div class="team-img position-relative">-->
    <!--                        <img class="img-fluid" src="img/team-3.jpg" alt="">-->
    <!--                        <div class="team-social">-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="bg-secondary p-4">-->
    <!--                        <h5>Jhon Doe</h5>-->
    <!--                        <p class="m-0">Web Designer</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-6 col-lg-3 text-center team mb-4">-->
    <!--                <div class="team-item rounded overflow-hidden mb-2">-->
    <!--                    <div class="team-img position-relative">-->
    <!--                        <img class="img-fluid" src="img/team-4.jpg" alt="">-->
    <!--                        <div class="team-social">-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>-->
    <!--                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="bg-secondary p-4">-->
    <!--                        <h5>Jhon Doe</h5>-->
    <!--                        <p class="m-0">Web Designer</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Team End -->


c