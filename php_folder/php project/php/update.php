
 <?php
 include('style1.css');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login1";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM booking2"; 


 $result = mysqli_query($conn,$sql);
 //$row    = mysqli_fetch_assoc($result)

if (mysqli_num_rows($result) > 0) //if there is more than 0 row in a table
{
	 echo "<table>";
     echo "<tr>";
     echo "<th>Firstname</th>";
     echo "<th>Lastname</th>";
      echo "<th>Email</th>";
     echo "<th>Phonenumber</th>";
      echo "<th>Flighttime</th>";
     echo "<th>Departure</th>";
      echo "<th>Return1</th>";
     echo "<th>Plane company</th>";
     echo "</tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo "<table>";
     echo "<tr>";
     echo "<td>".$row["firstname"]."</td>";
     echo "<td>" .$row["lastname"]."</td>";
     echo "<td>".$row["Email"]."</td>";
     echo "<td>" .$row["Phonenumber"]."</td>";
     echo "<td>".$row["Flighttime"]."</td>";
     echo "<td>" .$row["Departure"]."</td>";
     echo "<td>".$row["return1"]."</td>";
     echo "<td>" .$row["Planecompany"]."</td>";
     echo "</tr>";
     echo "</table>";
    }
} else {// no row in a table
    echo "0 results";
}
mysqli_close($conn);
include 'update1.php';

 ?>

