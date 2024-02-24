<?php
$currentYear=date("Y");
$prevYear=$currentYear-1;
echo '  <footer class="container-fluid py-5 bg-dark">
<div class="row text-center text-light">
  <div class="col-12 col-md">
    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg> -->
    <small class="d-block mb-3">@ '.$prevYear.'–'.$currentYear .' </small>
  </div>

  <div class="col-12 col-md">
    <h5>Quick Navigation</h5>
    <ul class="list-unstyled text-small">
      <li><a class="link-secondary text-decoration-none" href="index.php">Home</a></li>
      <li><a class="link-secondary text-decoration-none" href="about.php">About Us</a></li>
      <li><a class="link-secondary text-decoration-none" href="contact.php">Contact Us</a></li>
      <li><a class="link-secondary text-decoration-none" href="carListing.php">Car Listing</a></li>

    </ul>
  </div>

  <div class="col-12 col-md">
    <h5>Social Media</h5>
    <ul class="list-unstyled text-small">
      <li><a class="link-secondary text-decoration-none" href="#">Facebook</a></li>
      <li><a class="link-secondary text-decoration-none" href="#">Instagram</a></li>
      <li><a class="link-secondary text-decoration-none" href="#">Linkedin</a></li>
      <li><a class="link-secondary text-decoration-none" href="#">X</a></li>
    </ul>
  </div>

  <div class="col-12 col-md text-center">
    <h5>Subscribe</h5>
    <form action="includes/subscribe.php" method="post" class="d-flex align-items-center justify-content-center">
    <div class="form-floating">
    <input type="hidden" name="url" value="'.$_SERVER["REQUEST_URI"].'" />
  <input type="email" class="form-control mb-3" id="subEmail" name="subEmail" placeholder="name@example.com ">
  <label class="text-dark" for="subEmail">Email address</label>
  <div class="d-grid gap-2">
  <button class="btn btn-danger" type="submit">SUBSCRIBE</button>
</div>
</div>
</form>
  </div>
</div>
</footer>';
?>