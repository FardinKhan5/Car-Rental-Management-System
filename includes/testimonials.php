    <?php
    if($_SERVER['REQUEST_URI']=="/crms/myTestimonial.php" || $_SERVER['REQUEST_URI']=="/crms/myTestimonial.php?subscribed=1"){
      $userName=$_SESSION["userName"];
      $sql="SELECT * FROM `testimonial` WHERE userName='$userName';";
      $result=mysqli_query($conn,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          echo '<div class="col my-3 d-flex justify-content-center">
          <div class="card bg-primary text-light" style="width: 18rem;">
            <div class="card-body">
              <div class="d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                <h5 class="card-title ms-2 text-capitalize">'.$row["userName"].'</h5>
              </div>
              <p class="card-text text-capitalize">'.$row["tDesc"].'</p>
            </div>
          </div>
        </div>';
      }
      }
      
    }else{

    
    $sql="SELECT * FROM `testimonial` LIMIT 3;";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo '<div class="col my-3 d-flex justify-content-center">
        <div class="card bg-primary text-light" style="width: 18rem;">
          <div class="card-body">
            <div class="d-flex align-items-start">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
              <h5 class="card-title ms-2 text-capitalize">'.$row["userName"].'</h5>
            </div>
            <p class="card-text text-capitalize">'.$row["tDesc"].'</p>
          </div>
        </div>
      </div>';
    }
  }
    ?>
