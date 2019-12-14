<html>
<head>
	<link rel="stylesheet" href= "web3.css">
  <link rel="stylesheet" href="zee.css">
<title> Registered </title>
</head>

 <?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO  booking2(firstname,lastname,Email,Phonenumber,Flighttime,Departure,return1,Planecompany)
VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["Email"]."','".$_POST["Phonenumber"]."','".$_POST["Flighttime"]."','".$_POST["Departure"]."','".$_POST["return1"]."','".$_POST["Airline"]."')";

if (mysqli_query($conn, $sql)) {

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

 ?>

 <body>

<center>
<h2 style = "margin-left:12px;color:black"> Thank You your Flight is Booked </h2>
<br>
<a href = "project.html"><button class="btn" style = "margin-top:60px;"> Home page </button></a>

</center>

</body>
</html>

