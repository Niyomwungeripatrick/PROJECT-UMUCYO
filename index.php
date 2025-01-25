<?php
session_start();
// Check if the session variable already exists
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = true; // or any other relevant value
}

// The rest of your homepage code goes here
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UMUCYO SCHOOL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CSS/pages_style.css">
  <link rel="shortcut icon" href="../IMAGES/logo.PNG" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  footer{
    bottom: 0px;
  }
  /* h3{
    font-size: 20px;
    transition: 500ms ease-in-out;
  }
  h3:hover{
    font-size: 25px;
    transition: 500ms ease-in-out;
  } */
  .card-body{
    box-shadow: 1px 1px 10px rgb(0, 98, 255);
    transition: 500ms ease-in-out;
    width: 400px;
  }
  .navbar-brand{
    font-size: 30px;
  }
</style>
</style>
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
          <a class="nav-link btn btn-primary me-2 active" aria-current="Home" href="#">Home</a>
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
        <li class="nav-item">
          <?php
          // Check if the username is set in the session
          if (isset($_SESSION['username'])) {
              $username = $_SESSION['username'];
              echo '<span class="text-white ms-2">' . htmlspecialchars($username) . '</span>';
          }
          ?>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link btn btn-primary me-2" href="home.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search Anything!">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>
  </div>
</nav>
    </div>
  </div>
</nav>
<div class="text-center mb-4">
  <h2 class="display-5">Welcome to Umucyo School!</h2>
  <p class="lead"></p>
</div>
<div class="container-fluid mt-3">
  <p>At Umucyo School, we believe in nurturing bright minds and fostering a love for learning in a supportive and dynamic environment. Our dedicated staff is committed to providing high-quality education, empowering students to reach their full potential academically, socially, and personally.

    Whether you are a prospective student, parent, or educator, we are delighted to have you visit our website. Explore our diverse programs, discover our vibrant community, and join us on a journey of excellence and lifelong learning.
    
    At Umucyo, every learner shines!</p>
</div><br><br>

 <!-- Mission Section -->
 <div style="display: flex; justify-content: center; justify-self: center;" class="row mb-5">
  <div class="col-md-4">
      <div class="card shadow-sm h-100">
          <div class="card-body">
              <h3 class="card-title text-primary">Photos</h3>
              <p class="card-text"><img src="" alt="">Photos Section</p>
          </div>
      </div>
  </div>

  <!-- Vision Section -->
  <div class="col-md-4">
      <div class="card shadow-sm h-100">
          <div class="card-body">
              <h3 class="card-title text-primary">News & Updates</h3>
              <p class="card-text">No updates available now</p>
          </div>
      </div>
  </div>

  <!-- Approach Section -->
  <div class="col-md-4">
      <div class="card shadow-sm h-100">
          <div class="card-body">
              <h3 class="card-title text-primary">Advitisement</h3>
              <p class="card-text">Ads Section</p>
          </div>
      </div>
  </div>
</div>
<!-- Footer -->
<footer class="bg-dark text-white pt-4">
  <div class="container">
    <div class="row">
      <!-- Footer Section 1 -->
      <div class="col-md-4">
        <h5>Offers</h5>
        <p>. Nursery</p>
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
  <div style="height: 150px;" class="text-center py-3 bg-secondary mt-3">
    &copy; 2024 Umucyo School. All rights reserved.
  </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
// Set session when user is on the homepage
sessionStorage.setItem("projectSession", "active");

// Remove session on page exit
window.addEventListener("beforeunload", function () {
    sessionStorage.removeItem("projectSession");
});
</script>
</body>
</html>
<script>
window.addEventListener("beforeunload", function () {
    fetch("destroy_session.php", { method: "POST" });
});
</script>
