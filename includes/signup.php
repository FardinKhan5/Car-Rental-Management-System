<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["userAgree"])) {
        $userName = $_POST["userName"];
        $userDob = $_POST["userDob"];
        $userAddress = $_POST["userAddress"];
        $userCity = $_POST["userCity"];
        $userCountry = $_POST["userCountry"];
        $userContact = $_POST["userContact"];
        $userEmail = $_POST["userEmail"];
        $userPassword = $_POST["userPassword"];
        $sql = "INSERT INTO `user` (`userId`, `userName`, `userDob`, `userAddress`, `userCity`, `userCountry`, `userContact`, `userEmail`, `userPassword`, `userDoj`) VALUES (NULL, '$userName', '$userDob', '$userAddress', '$userCity', '$userCountry', '$userContact', '$userEmail', '$userPassword', current_timestamp());";
        try {
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $sql = "SELECT * FROM `user` WHERE userEmail='$userEmail' AND userPassword='$userPassword';";

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION["userName"] = $row["userName"];
                    $_SESSION["userId"] = $row["userId"];
                    $_SESSION["signup"]="true";
                }
            }
        } catch (Exception $e) {
            $_SESSION["alreadyExists"] = true;
        }

    }
}
?>