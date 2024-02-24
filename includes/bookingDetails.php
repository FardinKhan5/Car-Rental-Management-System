<?php

// if (isset($_GET["searchCar"])) {
//         $searchCar=$_GET["searchCar"];
//         $searchCar= ucwords($searchCar);
//         $searchCar="%".$searchCar . "%";
//         $userId=$_SESSION["userId"];
//         $sql = "SELECT car.*, booking.*
//         FROM car
//         JOIN booking ON car.carId = booking.carId WHERE booking.userId='$userId';";
// $result = mysqli_query($conn, $sql);
if (isset($_GET["searchCar"])) {
    $searchCar=$_GET["searchCar"];
    $searchCar= ucwords($searchCar);
    $searchCar="%".$searchCar . "%";
    $userId=$_SESSION["userId"];
    $sql = "SELECT car.*, booking.*
FROM car
JOIN booking ON car.carId = booking.carId WHERE booking.userId='$userId' AND car.carName LIKE '$searchCar';";
$result = mysqli_query($conn, $sql);

if( mysqli_num_rows($result) > 0){
    while( $row = mysqli_fetch_assoc($result) ){
        $bookFromDate = $row["bookFromDate"];
        $bookToDate = $row["bookToDate"];
        $date1 = date_create($bookFromDate);
        $date2 = date_create($bookToDate);
        $diff = date_diff($date1, $date2);
        $days = $diff->days;
        echo '<div class="col col-my-3 pt-3 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
              <img src="includes/showImage.php?id=' . $row["carId"] . '" class="card-img-top" style="height: 12rem;" alt="...">
              <div class="card-body">
                <h5 class="card-title text-dark">' . $row["carName"] . '</h5>
                <p class="card-text fw-bold text-success">Rent Per Day: ' . $row["carRentPerDay"] . ' Rs</p>
                <p class"card-text">From Date: ' . $row["bookFromDate"] . '</p>
                <p class"card-text">To Date: ' . $row["bookToDate"] . '</p>
                <p class"card-text">No. of Days: ' . $days . '</p>
                <p class="card-text fw-bold text-success">Book Amount: ' . $row["bookAmount"] . ' Rs</p>
                <div class="btn btn-success">Paid</div>
              </div>
            </div>
          </div>';
    }
}
}else{
$userId=$_SESSION["userId"];
$sql = "SELECT car.*, booking.*
FROM car
JOIN booking ON car.carId = booking.carId WHERE booking.userId='$userId';";
$result = mysqli_query($conn, $sql);

if( mysqli_num_rows($result) > 0){
    while( $row = mysqli_fetch_assoc($result) ){
        $bookFromDate = $row["bookFromDate"];
        $bookToDate = $row["bookToDate"];
        $date1 = date_create($bookFromDate);
        $date2 = date_create($bookToDate);
        $diff = date_diff($date1, $date2);
        $days = $diff->days;
        echo '<div class="col col-my-3 pt-3 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
              <img src="includes/showImage.php?id=' . $row["carId"] . '" class="card-img-top" style="height: 12rem;" alt="...">
              <div class="card-body">
                <h5 class="card-title text-dark">' . $row["carName"] . '</h5>
                <p class="card-text fw-bold text-success">Rent Per Day: ' . $row["carRentPerDay"] . ' Rs</p>
                <p class"card-text">From Date: ' . $row["bookFromDate"] . '</p>
                <p class"card-text">To Date: ' . $row["bookToDate"] . '</p>
                <p class"card-text">No. of Days: ' . $days . '</p>
                <p class="card-text fw-bold text-success">Book Amount: ' . $row["bookAmount"] . ' Rs</p>
                <div class="btn btn-success">Paid</div>
              </div>
            </div>
          </div>';
    }
}
}

?>