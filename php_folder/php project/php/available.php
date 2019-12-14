<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login1";

$Child = $_POST['child'];
$Departure = $_POST['departure'];
$Adults = $_POST['adults'];
$Date1 = $_POST['datetime'];

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM search WHERE child = '$Child' AND departure = '$Departure' AND adults = '$Adults' AND date1 = '$Date1'"; 


 $result = mysqli_query($conn,$sql);
 $row    = mysqli_fetch_assoc($result);

if($Child === $row['child'] && $Departure === $row['departure'] && $Adults === $row['adults'] && $Date1 === $row['date1']) {
    echo include 'pro2.html';
} else {
    echo "Flight NOT available";
}
mysqli_close($conn);

 ?>

