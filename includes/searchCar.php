<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["searchCar"])) {
        $searchCar=$_GET["searchCar"];

        $searchCar= ucwords($searchCar);
        $searchCar="%".$searchCar . "%";
        $sql = "SELECT * FROM `car` WHERE `carName` LIKE '$searchCar';";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col col-my-3 pt-3 d-flex justify-content-center">
    <div class="card shadow" style="width: 18rem;">
      <img src="includes/showImage.php?id=' . $row["carId"] . '" class="card-img-top" style="height: 12rem;" alt="...">
      <div class="card-body text-success">
        <h5 class="card-title text-dark">' . $row["carName"] . '</h5>
        <p class"card-text">' . $row["carAvailibility"] . '</p>
        <p class="card-text fw-bold text-dark">Rent Per Day: ' . $row["carRentPerDay"] . ' Rs</p>
        <a href="car.php?carName='.$row["carName"].'&carRent='.$row["carRentPerDay"].'" class="btn btn-primary">Rent Now</a>
      </div>
    </div>
  </div>';
        }
    }
}
?>