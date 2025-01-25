<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Umucyo School</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px; /* Offset for fixed navbar */
        }
        .sidebar {
            position: fixed;
            top: 56px; /* Height of navbar */
            bottom: 0;
            left: 0;
            z-index: 100; /* Ensure it stays on top */
            height: calc(100vh - 56px);
            padding: 48px 0 0; /* Space for the fixed navbar */
            background-color: #f8f9fa; /* Light background for sidebar */
        }
        .sidebar .nav-link {
            font-weight: bold;
        }
        .main-content {
            margin-left: 250px; /* Space for the sidebar */
            padding: 20px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar">
    <div class="d-flex flex-column p-3">
        <h5 class="p-3">Settings Menu</h5>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="admin.php" class="nav-link">Dashboard</a>
            </li>
            <li>
                <a href="manage_users.php" class="nav-link">Manage Users</a>
            </li>
            <li>
                <a href="settings.php"  class="nav-link active" aria-current="page">Settings</a>
            </li>
            <li>
                <a href="reports.php" class="nav-link">Reports</a>
            </li>
            <li>
                <a href="help.php" class="nav-link">Help</a>
            </li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="main-content">
    <h1 class="mb-4">Settings</h1>
    
    <!-- General Settings -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">General Settings</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="siteTitle">Site Title</label>
                    <input type="text" class="form-control" id="siteTitle" placeholder="Umucyo School">
                </div>
                <div class="form-group">
                    <label for="contactEmail">Contact Email</label>
                    <input type="email" class="form-control" id="contactEmail" placeholder="info@umucyoschool.com">
                </div>
                <div class="form-group">
                    <label for="contactNumber">Contact Number</label>
                    <input type="tel" class="form-control" id="contactNumber" placeholder="+250 123 456 789">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
    
    <!-- User Settings -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">User Settings</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="passwordPolicy">Password Policy</label>
                    <select class="form-control" id="passwordPolicy">
                        <option>Strong</option>
                        <option>Medium</option>
                        <option>Weak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sessionTimeout">Session Timeout (minutes)</label>
                    <input type="number" class="form-control" id="sessionTimeout" value="30">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
    
    <!-- Admission Settings -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Admission Settings</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="admissionStart">Admission Start Date</label>
                    <input type="date" class="form-control" id="admissionStart">
                </div>
                <div class="form-group">
                    <label for="admissionEnd">Admission End Date</label>
                    <input type="date" class="form-control" id="admissionEnd">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
    
    <!-- Payment Settings -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Payment Settings</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="paymentMethod">Payment Methods</label>
                    <select multiple class="form-control" id="paymentMethod">
                        <option>Mobile Money</option>
                        <option>Bank Transfer</option>
                        <option>Cash Payment</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>