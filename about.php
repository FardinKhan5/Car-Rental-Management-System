<?php
include 'includes/dbConnection.php';
include 'includes/startSession.php';
include 'includes/signup.php';
include 'includes/login.php';

if (isset($_GET["logout"])) {
  session_unset();
  session_destroy();
  header("location: index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark sticky-top" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href=".">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carListing.php">Car Listing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <?php
          if (isset($_SESSION["userName"])) {
            echo '
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ' . $_SESSION['userName'] . '
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="myProfile.php">My Profile</a></li>
              <li><a class="dropdown-item" href="myBookings.php">My Bookings</a></li>
              <li><a class="dropdown-item" href="myTestimonial.php">My Testimonial</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="index.php?logout=true">Log Out</a></li>
            </ul>
          </li> ';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <?php
    if(isset($_GET["subscribed"])){
      echo '<div class="alert alert-success m-0 alert-dismissible fade show" role="alert">
                    <strong>Subscribed</strong> You subscribed to our news letter Successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" id="close" aria-label="Close"></button>
                  </div>';
    
    }
  ?>
<div class="container text-center my-2">
    <h1 class="h1">Developed By</h1>
</div>
<div class="container my-3 ">
    <div class="row mb-3 bg-dark text-light">
        <div class="col-lg-3 bg-secondary p-0 d-flex justify-content-center" >
            <img src="assets/fardin.png" style="width: 200px;height: 200px;border-radius: 50%;" alt="profile image">
        </div>
        <div class="col-lg-9 p-3">
            <h1 class="h1">Fardin Khan</h1>
            <p>Class: BCS TY SEM 6</p>
            <p>Roll No: 19</p>
        </div>
    </div>
    <div class="row mb-3 bg-secondary text-light">
        <div class="col-lg-3 bg-dark p-0 d-flex justify-content-center order-lg-2" >
            <img src="assets/arbaj.png" style="width: 200px;height: 200px;border-radius: 50%;" alt="profile image">
        </div>
        <div class="col-lg-9 p-3 order-lg-1">
            <h1 class="h1">Shaikh Arbaj</h1>
            <p>Class: BCS TY SEM 6</p>
            <p>Roll No: 19</p>
        </div>
    </div>
    <div class="row mb-3 bg-dark text-light">
        <div class="col-lg-3 bg-secondary p-0 d-flex justify-content-center" >
            <img src="assets/kaleem.png" style="width: 200px;height: 200px;border-radius: 50%;" alt="profile image">
        </div>
        <div class="col-lg-9 p-3">
            <h1 class="h1">Shaikh Kaleem</h1>
            <p>Class: BCS TY SEM 6</p>
            <p>Roll No: 19</p>
        </div>
    </div>
</div>



<?php
include 'includes/footer.php';
?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>