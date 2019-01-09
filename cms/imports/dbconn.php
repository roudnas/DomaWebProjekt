<?php
$dbServername = "free1db.zikum.cz";
$dbUser = "roudnas.tk";
$dbPw = "17Wx1jcqB7";
$dbName = "roudnas_tk";

$conn = mysqli_connect($dbServername, $dbUser, $dbPw, $dbName);
if ($conn->connect_error) {
  die("Connection failed" . $conn->connect_error);
}

?>
