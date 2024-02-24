<?php
$carName= $_GET["carName"];

$sql = "SELECT * FROM car WHERE carName= '$carName'";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {

        $color="text-danger";
        if($row["carAvailibility"]==="Available"){
            $color= "text-success";
        }
        echo '<div class="row row-cols-sm-1 row-cols-lg-4 my-2 bg-black text-light">
            <div class="col">
            <h4 class="h4 m-2"> '.$row["carModelYear"].'</h4>
            <h6 class="h6 m-2"> Model Year </h6>
            </div>
            <div class="col">
            <h4 class="h4 m-2">'.$row["carBrand"].'</h4>
            <h6 class="h6 m-2">Brand</h6>
            </div>
            <div class="col">
            <h4 class="h4 m-2">'.$row["carSeats"].'</h4>
            <h6 class="h6 m-2">Seats</h6>
            </div>
            <div class="col">
            <h4 class="h4 m-2 '.$color.' ">'.$row["carAvailibility"].'</h4>
            <h6 class="h6 m-2 ">Availibility</h6>
            </div>

        </div>
        <div class="row d-flex justify-content-center">
        <h2 class="h2 bg-danger text-light p-2">Car Description</h2>
        <div class="col text-justify fw-bold">
        <p class="p">
            '.$row["carDesc"].'
            </p>
        </div>
            
        </div>';
    }


} else {
    echo 'Car not found';
}
?>