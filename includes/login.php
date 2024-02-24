<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["loginCheck"])){
        $loginEmail=$_POST["loginEmail"];
        $loginPassword=$_POST["loginPassword"];
        $sql="SELECT * FROM `user` WHERE userEmail='$loginEmail' AND userPassword='$loginPassword';";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 1){
           $row=mysqli_fetch_assoc($result);
           $_SESSION["userName"]= $row["userName"];
           $_SESSION["userId"]= $row["userId"];
           $_SESSION["login"]="true";
        }else{
            $_SESSION["loginFailed"]= "true";
        }
    }
 }
?>