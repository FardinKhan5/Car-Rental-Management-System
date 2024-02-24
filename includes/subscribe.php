<?php
include 'dbConnection.php';
$subEmail=$_POST["subEmail"];
$url=$_POST["url"];
$sql="INSERT INTO `subscribers` (`subsId`, `subsEmail`) VALUES (NULL, '$subEmail');";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: ".$url."?subscribed=1");
  //   echo '
  // <script>
  //       alert("Subscribed '.$url.'");
  //       window.location.href = \''.$url.'\';

  // </script>';
}
?>