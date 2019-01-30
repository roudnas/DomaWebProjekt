<?php
require 'dbconn.php';
  $sql = "SELECT username from users;";
  mysqli_set_charset($conn, "utf8");
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $showName = $row[0];
    echo "<option value='$showName'>$showName</option>";
}
}
?>
