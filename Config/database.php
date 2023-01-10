<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "printer";

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
	echo "connect to database failed" . "<br><br>";
}

