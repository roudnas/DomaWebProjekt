<?php
$dbServername = "localhost";
$dbUser = "root";
$dbPw = "";
$dbName = "adminsystemdb";

$conn = mysqli_connect($dbServername, $dbUser, $dbPw, $dbName);
if ($conn->connect_error) {
  die("Connection failed" . $conn->connect_error);
}

 ?>
