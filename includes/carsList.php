<?php
$sql = "SELECT * FROM `car`;";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  $color="text-danger";
  $disabled="disabled";
  if ($row["carAvailibility"] === "Available") {
    $disabled="";
    $color = "text-success";
  }
  echo '<div class="col col-my-3 pt-3 d-flex justify-content-center">
    <div class="card shadow" style="width: 18rem;">
      <img src="includes/showImage.php?id=' . $row["carId"] . '" class="card-img-top" style="height: 12rem;" alt="...">
      <div class="card-body '.$color.'">
        <h5 class="card-title text-dark">' . $row["carName"] . '</h5>
        <p class"card-text">' . $row["carAvailibility"] . '</p>
        <p class="card-text fw-bold text-dark">Rent Per Day: ' . $row["carRentPerDay"] . ' Rs</p>
        <a href="car.php?carName=' . $row["carName"] . '&carRent=' . $row["carRentPerDay"] . '" class="btn btn-primary '.$disabled.' ">Rent Now</a>
      </div>
    </div>
  </div>';
}
?>