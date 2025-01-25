<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Umucyo School</title>
    <link rel="stylesheet" href="../CSS/homes_style.css">
    <link rel="shortcut icon" href="../IMAGES/logo.PNG" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
          <a class="nav-link btn btn-primary" href="home-user.php">Home</a>
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
      <form style="position: relative; left: 35%;"  class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search Anything!">
        <button style="margin-left: 5px;" class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav><br>
<h2 class="text-center mb-4">Umucyo School Student Registration Form</h2>
<div style="box-shadow: 1px 1px 10px rgb(0, 128, 248); border-radius: 10px;" class="container mt-5"><br>
    <form method="POST">
        <!-- Student Information -->
        <h5>Student Information</h5>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>First Name</label>
                <input type="text" class="form-control" name="student_firstname" placeholder="First Name" required>
            </div>
            <div class="form-group col-md-6">
                <label>Last Name</label>
                <input type="text" class="form-control" name="student_lastname" placeholder="Last Name" required>
            </div>
        </div>
        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" class="form-control" name="student_birthdate" required>
        </div>
        <div class="form-group">
            <label>Level</label>
            <select name="student_level" class="form-control" required>
                <option value="" disabled selected>Select Level</option>
                <option value="nursery">Baby class</option>
                <option value="nursery">Middle class</option>
                <option value="nursery">Top class</option>
                <option value="primary">Primary 1</option>
                <option value="primary">Primary 2</option>
                <option value="primary">Primary 3</option>
                <option value="primary">Primary 4</option>
                <option value="primary">Primary 5</option>
                
            </select>
        </div>

        <!-- Parent Information -->
        <h5>Parent Information</h5>
        <div class="form-group">
            <label>Father's name</label>
            <input type="text" class="form-control" name="father_names" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <label>Phone numbers</label>
            <input type="tel" class="form-control" name="father_phone" placeholder="07XX XXX XXX" required>
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" name="father_email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label>Mother's name</label>
            <input type="text" class="form-control" name="mother_names" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <label>Phone numbers</label>
            <input type="tel" class="form-control" name="mother_phone" placeholder="07XX XXX XXX" required>
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" name="mother_email" placeholder="Email" required>
        </div>

        <!-- Payment Section -->
        <h5>Payment Options</h5>
        <div class="form-group">
            <label>Choose Payment Method</label>
            <select name="payment" class="form-control" required>
                <option value="" disabled selected>Select Payment Method</option>
                <option value="mobile-money">Mobile Money</option>
                <option value="bank-transfer">Bank Transfer</option>
            </select>
        </div>

        <div id="mobileMoneyInfo" style="display: none;">
            <p>Pay with Mobile Money to the number: <strong>+250 783 728 359</strong></p>
        </div>

        <div id="bankTransferInfo" style="display: none;">
            <p>Pay through Bank Transfer to Account Number: <strong>12345678890--81716</strong></p>
        </div>

        <!-- Submit Button -->
        <button type="submit" name="register-btn" class="btn btn-primary btn-block">Register</button><br><br>
    </form>
</div><br><br>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    // Show/hide payment options based on selection
    document.getElementById('paymentMethod').addEventListener('change', function () {
        let mobileMoneyInfo = document.getElementById('mobileMoneyInfo');
        let bankTransferInfo = document.getElementById('bankTransferInfo');
        
        mobileMoneyInfo.style.display = this.value === 'mobile-money' ? 'block' : 'none';
        bankTransferInfo.style.display = this.value === 'bank-transfer' ? 'block' : 'none';
    });
</script>
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
</body>
</html>

<!-- Php query the information into table -->
<?php
include('connection.php');
if (isset($_POST['register-btn'])) {
    $student_firstname=$_POST['student_firstname'];
    $student_lastname=$_POST['student_lastname'];
    $student_birthdate=$_POST['student_birthdate'];
    $student_level=$_POST['student_level'];
    $father_names=$_POST['father_names'];
    $father_phone=$_POST['father_phone'];
    $father_email=$_POST['father_email'];
    $mother_names=$_POST['mother_names'];
    $mother_phone=$_POST['mother_phone'];
    $mother_email=$_POST['mother_email'];
    $payment=$_POST['payment'];
    $query=mysqli_query($connect,"INSERT INTO registration_form VALUES(
        '',
        '$student_firstname',
        '$student_lastname',
        '$student_birthdate',
        '$student_level',
        '$father_names',
        '$father_phone',
        '$father_email',
        '$mother_names',
        '$mother_phone',
        '$mother_email',
        '$payment'
        )");
        if($query){
            echo "<script>alert('Successful Registerd!')</script>";
        }
}
?>