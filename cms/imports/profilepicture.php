<?php

require 'dbconn.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";
    $resultImg = mysqli_query($conn, $sqlImg);
    while ($rowImg = mysqli_fetch_assoc($resultImg)) {
      echo "<div>";
        if ($rowImg['status'] == 0) {
          echo "<img src='public/images/profileImg/profile".$id."jpg'>";
        }else {
          echo "<img src='public/images/defaultProfileImg.jpg'>";
        }
      echo "</div>";
    }
  }
}

 ?>
