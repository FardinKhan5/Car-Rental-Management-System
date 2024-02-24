<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["userAgree"])){
        $userId=$_SESSION["userId"];
        $userName=$_POST["userName"];
        $userDob=$_POST["userDob"];
        $userAddress=$_POST["userAddress"];
        $userCity=$_POST["userCity"];
        $userCountry=$_POST["userCountry"];
        $userContact=$_POST["userContact"];
        $userEmail=$_POST["userEmail"];
        $userPassword=$_POST["userPassword"];
        $sql="UPDATE `user` SET `userName` = '$userName', `userDob` = '$userDob', `userAddress` = '$userAddress', `userCity` = '$userCity', `userCountry` = '$userCountry', `userContact` = '$userContact', `userEmail` = '$userEmail', `userPassword` = '$userPassword' WHERE `user`.`userId` = '$userId';";
        try{
            $result=mysqli_query($conn,$sql);
            if($result){
                $_SESSION["userName"]=$userName;
            }
        }catch(Exception $e){
            $_SESSION["alreadyExists"]=true;
        }
        
    }
}
?>