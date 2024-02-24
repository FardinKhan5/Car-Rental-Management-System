<?php
include 'dbConnection.php';
include 'startSession.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminEmail = $_POST["adminEmail"];
    $adminPassword = $_POST["adminPassword"];

    $sql = "SELECT * FROM `admin` WHERE adminEmail='".$adminEmail."' AND adminPassword='".$adminPassword."';";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)==1) {

        $row = mysqli_fetch_assoc($result);
        $_SESSION["adminName"] = $row["adminName"];
        $_SESSION["adminId"] = $row["adminId"];
        $_SESSION["adminEmail"]= $row["adminEmail"];
        $_SESSION["adminPassword"]=$row["adminPassword"];
        header("location: ../adminPanel.php");

    } else {

        error_reporting(E_ALL);
ini_set('display_errors', 1);
        $_SESSION["loginFailed"] = "true";
        header("location: ../adminLogin.php");

    }

}
?>