<?php

$sql = "SELECT * FROM `booking`";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $toDate = $row["bookToDate"];
        $date = date("Y-m-d");

        $carId = $row["carId"];
        if ($toDate <= $date) {

            $updateSql = "UPDATE `car` SET `carAvailibility` = 'Available' WHERE `car`.`carId` = '$carId';";
            $updateResult = mysqli_query($conn, $updateSql);
        }

    }

}else{
    die("failed: ". mysqli_error($conn));
}

// $sql = "SELECT * FROM `booking`";
// $result = mysqli_query($conn, $sql);
// if ($result) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $toDate = $row["bookToDate"];
//         $date = date("Y-m-d");
//         echo $toDate . "". $date ."";
//         $carId = $row["carId"];
//         if ($toDate <= $date) {
//             echo "less than";
//             $updateSql = "UPDATE `car` SET `carAvailibility` = 'Available' WHERE `car`.`carId` <> '$carId';";
//             $updateResult = mysqli_query($conn, $updateSql);
//             if ($updateResult) {
//                 echo "succeess";
//             }else{
//                 die("failed ". mysqli_error($conn));
//             }
//         }

//     }

// }else{
//     die("failed: ". mysqli_error($conn));
// }


?>