

<?php
//array declaration

if(array_key_exists(upload, $_Post))
{
	//define constant
	define('UPLOAD','C:/xamp/htdocs/image');
    //move the file to the folder
    move_uploaded_file($_FILES['image']['temp_name'], UPLOAD_DIR.$_FILES['image']['name'])
}

$Player = array("zahid","Awais","Saiban");
krsort($Player);
 //$player[0] = "aaaaa";
foreach ($Player as $player)
{
	echo $player."<br>";
}
//echo $Player[0];
//echo $Player[1];
//echo $Player[2];
//constant name:

//define("favgame","FOOTBALL");

//echo "goood .<br>";

//echo gettype($variable);
//echo settype($variable,"string");
//echo gettype($variable);

$a = 10;
$b = 11;

//echo $a += $b;
//echo "<br>";
//echo $a.=$b;

$aa = "zahid";
$bb = "tariq";

//echo $cc = $aa . $bb;
include('zahid.php');
include('zahid.php');
?>