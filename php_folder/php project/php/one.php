
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login1";

$Username = $_POST['username'];
$Password = $_POST['password'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//query
$sql = "SELECT * FROM signup WHERE Email = '$Username' AND Password = '$Password'"; 


 $result = mysqli_query($conn,$sql);
 $row    = mysqli_fetch_assoc($result);

if($Username === $row['Email'] && $Password === $row['Password']) {
    echo include 'booking.html';
} else {
    echo include 'login1.html';
}
mysqli_close($conn);

 ?>