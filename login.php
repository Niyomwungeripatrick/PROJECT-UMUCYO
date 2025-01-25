<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login- Umucyo school</title>
    <link rel="stylesheet" href="../css/home.css">
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
    form{
        position: relative;
        top: 20%;
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
    <h1>LOGIN<span>FORM</span></h1><hr>
  <div class="mb-3 mt-3">
    <!-- <label for="uname" class="form-label">Username:</label> -->
    <input style="width: 400px; text-align: center ;" type="text" class="form-control" placeholder="Enter your username" name="username" required>
    <!-- <div class="valid-feedback">Valid.</div> -->
    <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
  </div>
  <div class="mb-3">
    <!-- <label for="pwd" class="form-label">Password:</label> -->
    <input style="width: 400px; text-align: center;" type="password" class="form-control" placeholder="Enter your valid Password" name="password" required>
    <!-- <div class="valid-feedback">Valid.</div> -->
    <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
    <p>Don't have an account! <a href="signup.php">Sign Up</a></p>
  </div>
  <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox">
    <label class="form-check-label" for="myCheck"><a href="policies.php">I agree on terms & policies</a>.</label>
    <!-- <div class="inavlid-feedback">Incorect username or Password!try again.</div> -->
    <!-- <div class="invalid-feedback">Check this checkbox to continue.</div> -->
  </div>
  <button type="submit" style="width: 400px;" name="login_btn" class="btn btn-success">Login</button>
</form>
</body>
</html>
<?php
include('connection.php');

if (isset($_POST['login_btn'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select=mysqli_query($connect,"SELECT * FROM signup_form WHERE username='$username' AND password='$password'");
    $fetch=mysqli_fetch_array($select);
    if ($fetch) {
// Store the username in the session
$_SESSION['username'] = $username;
// Redirect to the homepage
header("Location: index.php");
exit();
    }
    else{
        echo "<script>alert('Incorect username or Pasword! Try again')</script>";
    }
    
}
?>