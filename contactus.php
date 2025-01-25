<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Umucyo School</title>
    <link rel="shortcut icon" href="../IMAGES/logo.PNG" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/homes_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- nav-bar control -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"> 
      <img class="rounded-circle" style="width: 80px;" src="../IMAGES/logo.PNG" alt="logo"> UMUCYO <span>SCHOOL</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-primary me-2 active" aria-current="Home" href="home-user.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary me-2" href="academic.php">Academics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary me-2" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary me-2" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary me-2" href="contactus.php">Contact us</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search Anything!">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
    <section class="container py-5">
        <!-- Contact Us Heading -->
        <div class="text-center mb-4">
            <h2 class="display-5">Contact Us</h2>
            <p class="lead">We’re here to answer your questions and help you get started on your educational journey with Umucyo School.</p>
        </div>

        <!-- Contact Information -->
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Our Address</h5>
                        <p class="card-text">33M7+2Q8, KG 667 Street, Kigali</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Phone</h5>
                        <p class="card-text">+250 783 728 359</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Email</h5>
                        <p class="card-text">umucyoschool@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title text-center text-primary">Send Us a Message</h4>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email"  placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" name="message" rows="4" placeholder="Type your message here" required>
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date submitted</label>
                                <input type="date" class="form-control" name="date_submitted" rows="4" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit-btn" style="width: 300px;" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Footer -->
<footer class="bg-dark text-white pt-4">
    <div class="container">
      <div class="row">
        <!-- Footer Section 1 -->
        <div class="col-md-4">
          <h5>Offers:</h5>
          <p>. Nursery </p>
          <p>. Primary 1 - 6
          </p>
        </div>
  
        <!-- Footer Section 2 -->
        <div class="col-md-4">
          <h5>Contact</h5>
          <ul class="list-unstyled">
            <li>Email: umucyoschool@gmail.com</li>
            <li>Phone: +250 783 728 359</li>
            <li>Address: 33M7+2Q8, KG 667 Street, Kigali</li>
          </ul>
        </div>
  
        <!-- Footer Section 3 -->
        <div class="col-md-4">
          <h5>Follow Us</h5>
          <a href="https://www.facebook.com/@umucyoschooltv8286" class="text-white me-2"><i class="bi bi-facebook"></i> Facebook</a>
          <a href="https://www.youtube.com/@umucyoschooltv8286" class="text-white me-2"><i class="bi bi-youtube"></i> Youtube</a>
          <a href="#" class="text-white"><i class="bi bi-instagram"></i> Instagram</a>
        </div>
      </div>
    </div>
  
    <!-- Copyright -->
    <div class="text-center py-3 bg-secondary mt-3">
      &copy; 2024 Umucyo School. All rights reserved.
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include('connection.php');

if (isset($_POST['submit-btn'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $massage=$_POST['message'];
    $date_submitted=$_POST['date_submitted'];
    $query=mysqli_query($connect,"INSERT INTO messages VALUES('','$name','$email','$message','$date_submitted')");
    if ($query) {
      echo "<script>alert('Successful message sent!')</script>";
    }
    else{
      echo "<script>alert('Your message have not yet submitted! Try again')</script>";
    }
}
?>