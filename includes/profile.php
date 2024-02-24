<?php
    $userName=$_SESSION["userName"];
    $sql="SELECT * FROM `user` WHERE userName='$userName';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){
        $row=mysqli_fetch_assoc($result);
        echo '<div class="col my-1 d-flex justify-content-center"><form action="myProfile.php" method="post">
        <div class="row">
        <div class="col col-12 col-lg-4">
        <div class="mb-2">
          <label for="userName" class="form-label">Name</label>
          <input type="text" class="form-control" id="userName" name="userName"  disabled value="'.$row["userName"].'">
        </div>
        <div class="mb-2">
          <label for="userDob" class="form-label">Dob</label>
          <input type="date" class="form-control" id="userDob" name="userDob" disabled value="'.$row["userDob"].'">
        </div>
        <div class="mb-2">
          <label for="userAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="userAddress" name="userAddress" disabled value="'.$row["userAddress"].'">
        </div>
        </div>
        <div class="col col-12 col-lg-4">
        <div class="mb-2">
          <label for="userCity" class="form-label">City</label>
          <input type="text" class="form-control" id="userCity" name="userCity" disabled value="'.$row["userCity"].'">
        </div>
        <div class="mb-2">
        <label for="userCountry" class="form-label">Country</label>
        <input type="text" class="form-control" id="userCountry" name="userCountry" disabled value="'.$row["userCountry"].'">
      </div>
        

        <div class="mb-2">
          <label for="userContact" class="form-label">Contact</label>
          <input type="number" class="form-control" id="userContact" name="userContact" disabled value="'.$row["userContact"].'">
        </div>
        </div>
        <div class="col col-sm-12 col-lg-4">
        <div class="mb-2">
          <label for="userEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" name="userEmail"
            disabled value="'.$row["userEmail"].'">
        </div>
        <div class="mb-2">
          <label for="userPassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="userPassword" name="userPassword" disabled value="'.$row["userPassword"].'">
        </div>
        <div class="mb-0 form-check">
          <input type="checkbox" class="form-check-input" id="userAgree" name="userAgree" checked hidden>
          <label class="form-check-label" for="userAgree" hidden>Agree to our Terms & Conditions</label>
        </div>
        <div class="d-grid">
        <button type="button" class="btn btn-danger btn-sm my-2" id="edit">Edit</button>
          <button type="submit" class="btn btn-success btn-sm" id="saveChanges" hidden>Save Changes</button>
        </div> </div> </div>
      </form></div>';
    }
?>