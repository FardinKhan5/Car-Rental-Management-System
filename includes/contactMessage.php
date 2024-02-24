<?php
include 'dbConnection.php';
include 'startSession.php';
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $userEmail=$_POST["userEmail"];
    $userMessage=$_POST["message"];
    $sql="INSERT INTO `contact` (`contactId`, `contactEmail`, `contactMessage`, `ccontactTime`) VALUES (NULL, '$userEmail', '$userMessage', current_timestamp());";
    $result=mysqli_query($conn,$sql);
    if($result){
        $_SESSION["send"]=true;
    }
    if(isset($_POST["subscribe"])){

        $sql="INSERT INTO `subscribers` (`subsId`, `subsEmail`) VALUES (NULL, '$userEmail');";
        $result=mysqli_query($conn,$sql);
        if($result){
            $_SESSION["subscribe"]=true;
        }
    }
    header("location: ../contact.php");
 }
?>