<?php
$host="localhost";
$username="root";
$password="";
$db="crmsdb";
$conn= mysqli_connect($host,$username,$password,$db);
if(!$conn){
    die("failed to connect ". mysqli_connect_error());
}
?>