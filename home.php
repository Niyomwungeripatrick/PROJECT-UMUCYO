<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Umucyo School</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 0.875rem;
            background-color: #f8f9fa;
        }
        .hero {
            background: url('../IMAGES/pic3.PNG') no-repeat center center; /* Replace with your image URL */
            background-size: cover;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .testimonial {
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 8px;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
                <a class="navbar-brand" style="font-size: 40px;" href="javascript:void(0)"> 
                <img class="rounded-circle" style="width: 80px;" src="../IMAGES/logo.PNG" alt="logo">UMUCYO<span style="color: rgb(43, 142, 255);" >SCHOOL</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                  <span class="navbar-toggler-icon"></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" style="font-size: 20px;"  aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 20px;" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 20px;" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" style="font-size: 20px;" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success" style="font-size: 20px;" href=" signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   <!-- Hero Section as a Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="hero d-flex align-items-center justify-content-center" style="background-image: url('../IMAGES/pic1.PNG'); background-size: cover;">
                <div class="container text-center text-white">
                    <h1>Welcome to Umucyo School</h1>
                    <p>Join us to explore our programs and enroll for a brighter future!</p>
                    <a href="#" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="hero d-flex align-items-center justify-content-center" style="background-image: url('../IMAGES/pic2.PNG'); background-size: cover;">
                <div class="container text-center text-white">
                    <h1>Empowering Students</h1>
                    <p>We provide quality education for a bright and successful future.</p>
                    <a href="#" class="btn btn-light">Discover More</a>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="hero d-flex align-items-center justify-content-center" style="background-image: url('../IMAGES/pic3.PNG'); background-size: cover;">
                <div class="container text-center text-white">
                    <h1>Building Bright Futures</h1>
                    <p>Experience our inclusive community and supportive environment.</p>
                    <a href="#" class="btn btn-light">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    <!-- Main Content -->
    <div class="container my-5">
        <h2>Why Choose Us?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quality Education</h5>
                        <p class="card-text">We provide top-notch education with experienced teachers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Inclusive Community</h5>
                        <p class="card-text">Our school fosters a welcoming environment for all students.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Extracurricular Activities</h5>
                        <p class="card-text">We offer various activities to enhance student experience.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="text-center my-5">
            <h2>Ready to Start Your Journey?</h2>
            <p>Sign up today and become a part of our vibrant community!</p>
            <a href="signup.php" class="btn btn-primary btn-lg">Sign Up Now</a>
        </div>

        <!-- Testimonials Section -->
<h2 class="my-5">What Our Students Say</h2>
<div class="row">
    <div class="col-md-4">
        <div class="testimonial text-center">
            <img src="student1.jpg" alt="Isezerano Scovia" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;">
            <h5>Isezerano Scovia</h5>
            <p>"Umucyo School has changed my life! The teachers are amazing, and I’ve made lifelong friends."</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="testimonial text-center">
            <img src="../IMAGES/student1.jpg" alt="Irasubiza Chadia" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;">
            <h5>Irasubiza Chadia</h5>
            <p>"The support and resources here are incredible. I feel prepared for my future!"</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="testimonial text-center">
            <img src="../IMAGES/pic2.PNG" alt="Kwizera Bruno" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;">
            <h5>Kwizera Bruno</h5>
            <p>"I love the variety of extracurricular activities. It really enhances my school experience."</p>
        </div>
    </div>
</div>

        <!-- Events Section -->
        <h2 class="my-5">Upcoming Events</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Open House</h5>
                        <p class="card-text">Join us for an open house on March 15, 2024. Discover our programs and meet the faculty.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sports Day</h5>
                        <p class="card-text">Our annual sports day will be held on April 20, 2024. All students are encouraged to participate!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Graduation Ceremony</h5>
                        <p class="card-text">Celebrate our graduates on June 10, 2024. Join us in honoring their achievements!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <h2 class="my-5">Gallery</h2>
        <div class="row gallery">
            <div class="col-md-4">
                <img src="../IMAGES//pic2.PNG" alt="Event Image 1" class="img-fluid mb-4">
            </div>
            <div class="col-md-4">
                <img src="../IMAGES/pic3.PNG" alt="Event Image 2" class="img-fluid mb-4">
            </div>
            <div class="col-md-4">
                <img src="../IMAGES/pic1.PNG" alt="Event Image 3" class="img-fluid mb-4">
            </div>
        </div>

        <!-- FAQ Section -->
        <h2 class="my-5">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What programs do you offer?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We offer a variety of programs, including primary education, secondary education, and extracurricular activities.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How can I enroll my child?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can enroll your child by filling out our online admission form or visiting the school office for assistance.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the school hours?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our school hours are from 8:00 AM to 5:00 PM, Monday through Saturday.
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <h2 class="my-5">Get in Touch</h2>
        <div class="text-center">
            <p>If you have any questions, feel free to <a href="#">contact us</a> or visit our school.</p>
            <p>Email: info@umucyoschool.rw | Phone: +250 123 456 789</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2024 Umucyo School. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>