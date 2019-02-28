<?php
require 'dbconn.php';
mysqli_set_charset($conn, "utf8");
$sql='select count(*) from articles;';
$selectResult = mysqli_query($conn, $sql) or die();
$selectArr = mysqli_fetch_array($selectResult);
$count = $selectArr[0];

$divide = ceil($count / 5);

for ($i=0; $i < $divide; $i++) {
  $s = $i + 1;
  echo "<li class='page-item'><a class='page-link' href='devBlog.php?page=$s'>$s</a></li>";
}

?>
