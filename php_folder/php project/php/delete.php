
 <?php
 include('style1.css');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login1";

$Firstname = $_POST['firstname'];
//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM booking2 WHERE firstname = '$Firstname'"; 

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
 ?>

