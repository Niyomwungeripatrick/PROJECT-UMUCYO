<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../IMAGES/logo.PNG" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
</head>
<style>
    body{
        display: flex;
        justify-content: center;
        justify-self: center;
        text-align: center;
    }
    hr{
        border: 1px solid rgb(255, 153, 0);
    }
    span{
        color: rgb(255, 153, 0);
    }
</style>
<body>
<!-- <h1>LOGIN<span>FORM</span></h1><hr> -->
<form method="POST" class="was-validated">
    <h1>SIGNUP<span>FORM</span></h1><hr>
  <div class="mb-3 mt-3">
    <!-- <label for="uname" class="form-label">Username:</label> -->
    <input style="width: 400px; text-align: center ;" type="text" class="form-control" placeholder="Enter your username" name="username" required><br>
    <input style="width: 400px; text-align: center ;" type="number" class="form-control" placeholder="Enter your Phone numbers" name="number" required><br>
    <input style="width: 400px; text-align: center ;" type="email" class="form-control" placeholder="Enter your valid email" name="email" required><br>
    <!-- <div class="valid-feedback">Valid.</div> -->
    <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
  </div>
  <div class="mb-3">
    <!-- <label for="pwd" class="form-label">Password:</label> -->
    <input style="width: 400px; text-align: center;" type="password" class="form-control" placeholder="Enter your valid Password" name="password" required>
    <!-- <div class="valid-feedback">Valid.</div> -->
    <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
    <p>Have an account! <a href="login.php">Login</a></p>
  </div>
  <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox">
    <label class="form-check-label" for="myCheck">I agree on terms & policies.</label>
    <!-- <div class="inavlid-feedback">Incorect username or Password!try again.</div> -->
    <!-- <div class="invalid-feedback">Check this checkbox to continue.</div> -->
  </div>
  <button type="submit" style="width: 400px;" name="signup-btn" class="btn btn-success">Sign Up</button>
</form>
</body>
</html>
<?php
include('connection.php');

if (isset($_POST['signup-btn'])) {
    $username=$_POST['username'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $q=mysqli_query($connect,"INSERT INTO signup_form VALUES('','$username','$number','$email','$password')");
    if ($q) {
        header('location:login.php');
    }
    
}
?>