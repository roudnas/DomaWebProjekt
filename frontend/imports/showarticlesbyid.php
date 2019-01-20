<?php

require 'dbconn.php';
mysqli_set_charset($conn, "utf8");
$getID = $_GET['id'];
if (isset($getID)) {

  $sql = "select id, nadpis, autor, text from articles where id = $getID";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $showID = $row[0];
      $showNadpis = $row[1];
      $showAutor = $row[2];
      $showText = $row[3];

      echo "<div class='articles container text-center my-4 py-3 col-10' style='overflow-y:hidden;'>
            <h1 style='overflow-y:hidden;'>$showNadpis</h1>
            <div class='p-2 mx-auto my-3' style='width:50%;'>
            <p style='overflow-y:hidden;'>$showText</p>
            </div>
            <h5 class='text-muted' style='overflow-y:hidden;'>$showAutor</h5>
            </div>";



    }
  }


} else {
  header("Location: ../devBlog.php");
  exit();
}




?>
