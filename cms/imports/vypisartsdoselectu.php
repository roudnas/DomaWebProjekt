<?php
require 'dbconn.php';
$sql = "select id from articles;";
  mysqli_set_charset($conn, "utf8");
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
if ($resultCheck == 0) {
  echo "Zadne clanky neexistuji.";
} else {
  while ($row = mysqli_fetch_array($result)) {
    $showID = $row[0];
    echo "<option value='$showID'>$showID</option>";
  }
}
?>
