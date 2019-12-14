<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
<form method = "GET" action = "ibrahim.php">
NAME:
<input type = "text" name = "name" id = "name">
	<input type = "submit">
	</form>
<?php


$ibrahim = $_GET['name'];
echo "$ibrahim";

?>
</body>
</html>