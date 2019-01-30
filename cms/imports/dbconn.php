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
  $dbUser = "domasoftware.tk";
  $dbPw = "Ax3hh(8S5X6fJ.";
  $dbName = "domasoftware_tk";

  $conn = mysqli_connect($dbServername, $dbUser, $dbPw, $dbName);
  if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
  }

}



?>
