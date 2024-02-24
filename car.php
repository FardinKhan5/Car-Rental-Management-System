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
 <!-- carousel -->
  <div class="container-fluid p-0 m-0">
    <div class="row gx-0">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="includes/showImage.php?carName=<?php echo $_GET["carName"];?>&imageNo=1" class="d-block w-100" style="height: 300px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="includes/showImage.php?carName=<?php echo $_GET["carName"];?>&imageNo=2" class="d-block w-100" style="height: 300px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="includes/showImage.php?carName=<?php echo $_GET["carName"];?>&imageNo=3" class="d-block w-100" style="height: 300px;" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
  </div>

  <div class="container-fluid p-5">
    <div class="row">
      <div class="col col-lg-8">
        <div class="row">
        <h1 class="h1"><?php echo $_GET["carName"] ?></h1>
        </div>
        <?php
        include 'includes/carDetails.php';
        ?>
      </div>
      <div class="col col-lg-4 ">
        <div class="col-12 d-flex justify-content-end">

        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-currency-rupee text-success" viewBox="0 0 16 16">
  <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
</svg>
          <h1 class="h1 text-success"><?php echo $_GET["carRent"]; ?></h1>
        </div>
        <div class="col-12">
          <div class="text-center bg-black text-light p-2 mt-2">
            <h4>Book Now</h1>
          </div>
          <div class="col-12 my-4">
            <form action="checkout.php" method="get">
            <div class="form-floating mb-3">
  <input type="date" class="form-control" id="fromDateInput" placeholder="fromDate" name="fromDate" required>
  <label for="fromDateInput">From:</label>
</div>
<div class="form-floating mb-3">
  <input type="date" class="form-control" id="toDateInput" placeholder="toDate" name="toDate" required>
  <label for="toDateInput">To</label>
</div>
<input type="hidden" name="carName" value="<?php echo $_GET["carName"]; ?>">
<div class="d-grid gap-2">
  <?php
  if(isset($_SESSION["userName"]) && isset($_SESSION["userId"])){
    echo '<button type="submit" class="btn btn-primary btn-block">Book Now</button>';
  }else{
    echo '<button class="btn btn-primary btn-block disabled">Login/Signup to Book</button>';
  }
  ?>
  
</div>

            </form>
          </div>
        </div>
      </div>
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
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>