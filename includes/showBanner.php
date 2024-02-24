<?php
include 'dbConnection.php';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $imageId = $_GET["id"];
        $sql = "SELECT bannerImg FROM banner WHERE bannerId = $imageId";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            // Set the appropriate content type for the image
            header('Content-Type: image/jpeg');

            // Output the image data
            echo $row['bannerImg'];
        } else {
            echo 'Image not found';
        }
    }
}
?>