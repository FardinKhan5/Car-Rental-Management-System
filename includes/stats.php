<?php
include 'dbConnection.php';

$sql="SELECT * FROM `user`";
$result=mysqli_query($conn,$sql);
$users=mysqli_num_rows($result);

$sql="SELECT * FROM `car`";
$result=mysqli_query($conn,$sql);
$cars=mysqli_num_rows($result);

$sql="SELECT * FROM `booking`";
$result=mysqli_query($conn,$sql);
$bookings=mysqli_num_rows($result);

$sql="SELECT * FROM `subscribers`";
$result=mysqli_query($conn,$sql);
$subscribers=mysqli_num_rows($result);

$sql="SELECT * FROM `contact`";
$result=mysqli_query($conn,$sql);
$contacts=mysqli_num_rows($result);

$sql="SELECT * FROM `testimonial`";
$result=mysqli_query($conn,$sql);
$testimonials=mysqli_num_rows($result);

$sql="SELECT * FROM `brand`";
$result=mysqli_query($conn,$sql);
$brands=mysqli_num_rows($result);

$sql="SELECT SUM(bookAmount) FROM booking";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$revenue=$row[0];

?>