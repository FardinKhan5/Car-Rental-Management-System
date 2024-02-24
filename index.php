<?php
include 'includes/dbConnection.php';
include 'includes/startSession.php';
include 'includes/signup.php';
include 'includes/login.php';
include 'includes/makeAutoAvailable.php';
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
  <!-- sign up modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="signupModalLabel">Sign Up</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="post">
            <div class="mb-3">
              <label for="userName" class="form-label">Name</label>
              <input type="text" class="form-control" id="userName" name="userName" required>
            </div>
            <div class="mb-3">
              <label for="userDob" class="form-label">Dob</label>
              <input type="date" class="form-control" id="userDob" name="userDob" required>
            </div>
            <div class="mb-3">
              <label for="userAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="userAddress" name="userAddress" required>
            </div>
            <div class="mb-3">
              <label for="userCity" class="form-label">City</label>
              <input type="text" class="form-control" id="userCity" name="userCity" required>
            </div>
            <div class="mb-3">
              <label for="userCountry" class="form-label">Country</label>
              <input type="text" class="form-control" id="userCountry" name="userCountry" required>
            </div>
            <div class="mb-3">
              <label for="userContact" class="form-label">Contact</label>
              <input type="number" class="form-control" id="userContact" name="userContact" required>
            </div>
            <div class="mb-3">
              <label for="userEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" name="userEmail"
                required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="userPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="userPassword" name="userPassword" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="userAgree" name="userAgree" required>
              <label class="form-check-label" for="userAgree">Agree to our Terms & Conditions</label>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-danger">Sign Up</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- login modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="post">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="name@example.com">
              <label for="loginEmail">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="loginPassword" name="loginPassword"
                placeholder="Password">
              <label for="loginPassword">Password</label>
            </div>
            <input type="checkbox" name="loginCheck" id="loginCheck" checked hidden>
            <div class="d-grid">
              <button type="submit" class="btn btn-danger">Login</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- navbar -->
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
            <a class="nav-link active" aria-current="page" href=".">Home</a>
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
        <?php
        if (!isset($_SESSION["userName"])) {
          echo '<button type="button" class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
          data-bs-target="#signupModal">Sign Up</button>
        <button class="btn btn-outline-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>';
        
        }
        ?>
      </div>
    </div>
  </nav>
  <?php
  include 'includes/alerts.php';
  signupAlerts();
  loginAlerts();
  if(isset($_GET["subscribed"])){
    echo '<div class="alert alert-success m-0 alert-dismissible fade show" role="alert">
                  <strong>Subscribed</strong> You subscribed to our news letter Successfully.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" id="close" aria-label="Close"></button>
                </div>';
  
  }
  ?>
  <!-- carousel -->
  <div class="container-fluid p-0 shadow">
    <div class="row gx-0">
      <div class="col">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/banner1.jpg" class="d-block w-100" style="height: 400px;" alt="...">

              <!-- <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.573);">
                <h5>Car Rental Management System</h5>
                <p>Transform your car rental business with our cutting-edge management system. Streamline operations, enhance customer experience, and boost efficiency.</p>
              </div> -->
            </div>
            <div class="carousel-item">
              <img src="assets/banner3.jpg" class="d-block w-100" style="height: 400px;" alt="...">
              <!-- <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.573);">
                <h5>Efficient Operations</h5>
                <p>Optimize your fleet management, reservation system, and scheduling. Our system ensures smooth and efficient operations, saving you time and resources.</p>
              </div> -->
            </div>
            <div class="carousel-item">
              <img src="assets/banner2.jpg" class="d-block w-100" style="height: 400px;" alt="...">
              <!-- <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.573);">
                <h5>Customer-Centric Approach</h5>
                <p>Provide a seamless experience for your customers with user-friendly interfaces, easy booking processes, and real-time communication. Enhance customer satisfaction and loyalty.</p>
              </div> -->
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- <img src="assets/banner-image-1.jpg" class="img-fluid" alt="car image" style="width: 100%;height: 400px;"> -->
      </div>
    </div>
  </div>

  <!-- cars on rent -->
  <div class="container-fluid my-3 py-2 shadow">
    <div class="row">
      <div class="col text-center mb-2">
        <h1 class="h1">Cars On Rent</h1>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-3">

      <?php
        include 'includes/homeCars.php';
        ?>

    </div>
    <div class="row my-3">
      <div class="col pt-2 text-center">
        <a href="carListing.php" class="btn btn-success">See More ></a>
      </div>
    </div>
  </div>
  
  <div class="container-fluid my-2 py-2 bg-black text-light shadow">
    <div class="row pt-2">
      <div class="col text-center">
        <h1 class="h1">Testimonials</h1>
      </div>

    </div>
    <div class="row row-cols-1 row-cols-lg-3 my-3">
    <?php
    include 'includes/testimonials.php';
    ?>
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