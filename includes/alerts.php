<?php
function signupAlerts(){
    if (isset($_SESSION["alreadyExists"])) {
        $_SESSION["alreadyExists"] = null;
        echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                <strong>Failed!</strong> Email or Password already Exists.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }
    if (isset($_SESSION["signup"])) {
        $_SESSION["singup"] = null;
        echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <strong>Signed Up</strong> You Signed Up Successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }
}

  function loginAlerts(){
    if (isset($_SESSION["loginFailed"])) {
        $_SESSION["loginFailed"] = null;
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert mb-0">
                <strong>Invalid Credentials</strong> Pls enter correct email or password.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }
    if (isset($_SESSION["login"])) {
        $_SESSION["login"] = null;
        echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <strong>Login Success</strong> You Logged in Successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }

  }

  function bookedAlerts(){
    if (isset($_GET["success"])) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Booked</strong> Congrats! Your booking was Successfull.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }
}
?>