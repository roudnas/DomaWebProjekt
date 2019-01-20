<?php

require 'dbconn.php';
mysqli_set_charset($conn, "utf8");
$sql = "select id, nadpis, autor, text from articles";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $showID = $row[0];
    $showNadpis = $row[1];
    $showAutor = $row[2];
    $showText = $row[3];
    $splitText = str_split($showText, 200);

    echo "<div class='articles container text-center my-4 py-3 col-10' style='overflow-y:hidden;'>
          <a style='text-decoration:none; color:#fff;' href='articles.php?id=$showID'>
          <h1 style='overflow-y:hidden;'>$showNadpis</h1>
          <h5 class='text-muted' style='overflow-y:hidden;'>$showAutor</h5>
          <div class='p-2 mx-auto my-3' style='width:50%; border:1px solid lightgray;'>
          <p style='overflow-y:hidden;'>$splitText[0]</p>
          </div>
          </a>
          </div>";



  }
}



?>
