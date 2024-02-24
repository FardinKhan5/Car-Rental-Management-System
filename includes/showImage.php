<?php
include 'dbConnection.php';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $imageId = $_GET["id"];
        $sql = "SELECT carImg1 FROM car WHERE carId = $imageId";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            // Set the appropriate content type for the image
            header('Content-Type: image/jpeg');

            // Output the image data
            echo $row['carImg1'];
        } else {
            echo 'Image not found';
        }
    } else if (isset($_GET['carName']) && isset($_GET["imageNo"])) {
        $carName = $_GET['carName'];
        $imageNo = $_GET['imageNo'];


        if ($imageNo == 1) {

            $sql = "SELECT carImg1 FROM car WHERE carName= '$carName'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);

                // Set the appropriate content type for the image
                header('Content-Type: image/jpeg');

                // Output the image data
                echo $row['carImg1'];
            } else {
                echo 'Image not found';
            }
        } else if ($imageNo == 2) {

            $sql = "SELECT carImg2 FROM car WHERE carName= '$carName'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);

                // Set the appropriate content type for the image
                header('Content-Type: image/jpeg');

                // Output the image data
                echo $row['carImg2'];
            } else {
                echo 'Image not found';
            }
        } else if ($imageNo == 3) {

            $sql = "SELECT carImg3 FROM car WHERE carName= '$carName'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);

                // Set the appropriate content type for the image
                header('Content-Type: image/jpeg');

                // Output the image data
                echo $row['carImg3'];
            } else {
                echo 'Image not found';
            }
        }

    }
}
?>