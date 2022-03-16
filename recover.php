<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "coin3";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

echo "ok";

if (!$conn) {
	echo "Connection failed!";
	exit();
}
?>