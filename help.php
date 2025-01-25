<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help - Umucyo School</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> <!-- Custom styles -->
    <style>
        body {
            padding-top: 56px; /* Adjust for fixed navbar */
        }
        .sidebar {
            position: fixed;
            top: 56px; /* Height of navbar */
            bottom: 0;
            left: 0;
            z-index: 100;
            height: calc(100% - 56px); /* Full height minus navbar */
            padding: 48px 0 0; /* Spacing for sidebar */
            background-color: #f8f9fa; /* Light background for sidebar */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Umucyo School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="admin.php">Admin Dashboard</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar">
    <div class="d-flex flex-column p-3">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="admin.php" class="nav-link">Dashboard</a>
            </li>
            <li>
                <a href="manage_users.php" class="nav-link">Manage Users</a>
            </li>
            <li>
                <a href="settings.php" class="nav-link">Settings</a>
            </li>
            <li>
                <a href="reports.php" class="nav-link">Reports</a>
            </li>
            <li>
                <a href="help.php" class="nav-link active" aria-current="page">Help</a>
            </li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="container mt-5">
    <h1 class="mb-4">Help and Support</h1>
    
    <!-- FAQs Section -->
    <h2>Frequently Asked Questions (FAQs)</h2>
    <div class="card mb-4">
        <div class="card-body">
            <h5>1. How do I apply for admission?</h5>
            <p>You can apply for admission by filling out the online admission form available on our website. Make sure to submit all required documents.</p>

            <h5>2. What are the payment options?</h5>
            <p>We accept Mobile Money, Bank Transfer, and Cash Payment. More details can be found on the Payments page.</p>

            <h5>3. How can I contact the school?</h5>
            <p>You can reach us via email at <a href="www://www.umucyoschool@gmail.com">umucyoschool@gmail.com</a> or call us at +250 123 456 789.</p>
        </div>
    </div>

    <!-- Contact Information Section -->
    <h2>Contact Information</h2>
    <div class="card mb-4">
        <div class="card-body">
            <p>If you have any further questions, feel free to contact us:</p>
            <p>Email: <a href="www://www.umucyoschool@gmail.com">umucyoschool@gmail.com</a></p>
            <p>Phone: +250 123 456 789</p>
            <p>Office Hours: Monday to Friday, 8 AM - 5 PM</p>
        </div>
    </div>

    <!-- Useful Links Section -->
    <h2>Useful Links</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item"><a href="admission.php">Admission Information</a></li>
        <li class="list-group-item"><a href="policies.php">School Policies</a></li>
        <li class="list-group-item"><a href="forms.php">Download Forms</a></li>
    </ul>

    <!-- Feedback Section -->
    <h2>Feedback</h2>
    <form>
        <div class="form-group">
            <label for="feedbackName">Name</label>
            <input type="text" class="form-control" id="feedbackName" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <label for="feedbackEmail">Email</label>
            <input type="email" class="form-control" id="feedbackEmail" placeholder="Your Email" required>
        </div>
        <div class="form-group">
            <label for="feedbackMessage">Message</label>
            <textarea class="form-control" id="feedbackMessage" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Feedback</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>