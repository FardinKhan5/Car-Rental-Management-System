<?php
include 'includes/dbConnection.php';
include 'includes/startSession.php';
include 'includes/updateProfile.php';
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
  <title>Bootstrap demo</title>
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
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <?php
          if (isset($_SESSION["userName"])) {
            echo '
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ' . $_SESSION['userName'] . '
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item active" href="myProfile.php">My Profile</a></li>
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
        <a class="btn btn-warning me-2 btn-sm" href="index.php?logout=true">Log Out</a>
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
  <div class="container-fluid p-0 m-0"
    style="background: url(assets/banner-image-2.jpg);width: 100%;background-size: cover;">
    <div class="row row-cols-1 m-0 py-5" style="background-color: rgba(0, 0, 0, 0.573);">

      <div class="col text-center">
        <h2 class="h2 text-light fw-bold">My Profile</h2>
      </div>
      <div class="col d-flex justify-content-center">

        <nav
          style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-light">Home</a>
            </li>
            <li class="breadcrumb-item active text-light" aria-current="page">My Profile</li>
          </ol>
        </nav>
      </div>

    </div>
  </div>

  <div class="container-fluid">

    <div class="row py-2">
      <?php
        include 'includes/profile.php';
        ?>
    </div>
  </div>
  <?php
  include 'includes/footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    $("document").ready(() => {
      $("#edit").click(() => {
        $('.form-control').prop("disabled", false);
        $("#saveChanges").prop("hidden", false);
      })

    })

  </script>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>