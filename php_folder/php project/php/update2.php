
 <?php
 include('style1.css');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login1";

$Firstname1 = $_POST['firstname1'];
$Firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['Email'];
$phone = $_POST['Phonenumber'];
$Flight = $_POST['Flighttime'];
$Departure = $_POST['Departure'];
$return = $_POST['return'];
$Planecompany = $_POST['Planecompany'];
//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE booking2 
SET firstname = '$Firstname',lastname = '$lastname',Email = '$email',Phonenumber= '$phone',Flighttime = '$Flight',Departure = '$Departure',return1 = '$return',Planecompany = '$Planecompany' Where firstname = '$Firstname1'"; 

if (mysqli_query($conn, $sql)) {
    echo "Record Updated successfully";
} else {
    echo "Error in updation: " . mysqli_error($conn);
}

mysqli_close($conn);
 ?>

