<?phP
include 'startSession.php';
include 'dbConnection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["paymentMethod"])) {

        $userId = $_SESSION["userId"];
        $carId = $_SESSION["carId"];
        $fromDate = $_SESSION["fromDate"];
        $toDate = $_SESSION["toDate"];
        $date1 = date_create($fromDate);
        $date2 = date_create($toDate);
        $diff = date_diff($date1, $date2);
        $days = $diff->days;
        $bookAmount=$days * $_SESSION["carRent"];
        
        $bookStatus = "Booked";
        // $userAddress = $_POST["userAddress"];
        // $userCity = $_POST["userCity"];
        // $userCountry = $_POST["userCountry"];
        // $userContact = $_POST["userContact"];
        // $userEmail = $_POST["userEmail"];
        // $userPassword = $_POST["userPassword"];
        $sql = "INSERT INTO `booking` (`userId`, `carId`, `bookAmount`, `bookFromDate`, `bookToDate`, `bookStatus`) VALUES ('$userId', '$carId', '$bookAmount', '$fromDate', '$toDate', '$bookStatus');";
        $result = mysqli_query($conn, $sql);
        if($result){
            $sql="UPDATE `car` SET `carAvailibility` = 'Unavailable' WHERE `car`.`carId` = '$carId';";
            $result = mysqli_query($conn, $sql);
            if($result){
            header("location: ../myBookings.php?success=true");
            }
        }else{
            header("location: car.php");
        }


    }
}
?>