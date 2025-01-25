<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umucyo School Terms and Policies</title>
    <link rel="shortcut icon" href="../IMAGES/logo.PNG" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/homes_style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- nav-bar control -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"> 
    <img class="rounded-circle" style="width: 80px;" src="../IMAGES/logo.PNG" alt="logo">UMUCYO<span>SCHOOL</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" onclick="setActiveLink('Home')" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="academic.php">Academics</a>
        </li>
        <li class="nav-item">
          <a  onclick="TopNavBar.openNavItem" class="nav-link" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
            <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
          <a class="nav-link" href="contactus.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Join Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search Anything!">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container my-5">
        <h1 class="text-center mb-4">Umucyo School Terms and Policies</h1>

        <div id="accordion">
            <!-- Admission Policy -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Admission Policy
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><strong>Application Process:</strong> Admission requires a completed application form, required documents, and a non-refundable fee.</li>
                            <li><strong>Age Requirements:</strong> Each grade level has age requirements, and proof of age must be provided.</li>
                            <li><strong>Admission Decision:</strong> Based on space, readiness, and alignment with values; Umucyo School reserves the right to deny admission.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Fee Payment Policy -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Fee Payment Policy
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><strong>Payment Options:</strong> Fees can be paid via mobile money, bank transfer, or in person.</li>
                            <li><strong>Fee Schedule:</strong> Fees must be paid by deadlines to avoid late fees.</li>
                            <li><strong>Refund Policy:</strong> Application fees are non-refundable; tuition refunds are available for withdrawal before term start.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Attendance Policy -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Attendance Policy
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><strong>Punctuality:</strong> Students must arrive on time; persistent lateness may affect records.</li>
                            <li><strong>Absence Reporting:</strong> Parents should report absences in advance or on the day of absence.</li>
                            <li><strong>Make-up Work:</strong> Students are responsible for completing missed assignments.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Code of Conduct -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Code of Conduct
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><strong>Behavioral Expectations:</strong> Students must conduct themselves respectfully.</li>
                            <li><strong>Respect for Property:</strong> Respect for school and others' property is required.</li>
                            <li><strong>Uniform Policy:</strong> Students are required to wear the school uniform.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Health and Safety Policy -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Health and Safety Policy
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><strong>Emergency Procedures:</strong> Safety protocols are in place for emergencies.</li>
                            <li><strong>Health Requirements:</strong> Parents must disclose medical conditions.</li>
                            <li><strong>Immunization:</strong> Proof of vaccinations is required for enrollment.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Privacy Policy -->
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Privacy Policy
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><strong>Data Collection:</strong> Personal information is collected for administrative purposes.</li>
                            <li><strong>Data Sharing:</strong> Personal data is confidential and only shared when required.</li>
                            <li><strong>Photography and Video:</strong> Photos/videos of students may be used for promotional purposes.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Parent Communication Policy -->
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Parent Communication Policy
                        </button>
                    </h2>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li><strong>Regular Updates:</strong> Parents receive regular updates on student progress.</li>
                            <li><strong>Parent-Teacher Meetings:</strong> Scheduled each term to discuss student progress.</li>
                            <li><strong>Feedback and Complaints:</strong> Feedback is welcome, and complaints will be reviewed promptly.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>