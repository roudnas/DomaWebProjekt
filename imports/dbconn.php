<?php
$serverIP = $_SERVER['SERVER_ADDR'];
if ($serverIP == "127.0.0.1") {
  $dbServername = "localhost";
  $dbUser = "root";
  $dbPw = "";
  $dbName = "adminsystemdb";

  $conn = mysqli_connect($dbServername, $dbUser, $dbPw, $dbName);
  if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
  }
} else {
  $dbServername = "free1db.zikum.cz";
  $dbUser = "roudnas.tk";
  $dbPw = "17Wx1jcqB7";
  $dbName = "roudnas_tk";

  $conn = mysqli_connect($dbServername, $dbUser, $dbPw, $dbName);
  if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
  }

}



?>
