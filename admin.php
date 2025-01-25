<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 0.875rem;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            padding-top: 56px; /* height of navbar */
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
    <div class="sidebar bg-light">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px;">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">Dashboard</a>
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
                    <a href="help.php" class="nav-link">Help</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main class="ms-sm-auto col-lg-9 px-md-4" style="margin-left: 250px; padding-top: 56px;">
        <div class="container">
            <h1 class="mt-4">Welcome to the Admin Dashboard</h1>
            <p>Here you can manage your application settings, users, and more.</p>
            <div class="row">
                <div class="col-md-6">
                    <h3>Statistics</h3>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">User Registrations</h5>
                            <p class="card-text">Total users: 150</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Quick Actions</h3>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Latest Activity</h5>
                            <p class="card-text">User John Doe registered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>