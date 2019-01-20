<?php

require 'dbconn.php';
mysqli_set_charset($conn, "utf8");
$sql = "select nadpis, autor, text from articles";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $showNadpis = $row[0];
    $showAutor = $row[1];
    $showText = $row[2];
    $splitText = str_split($showText, 200);

    echo "<div class='articles container text-center my-4 col-10' style='overflow-y:hidden;'>
          <h1 style='overflow-y:hidden;'>$showNadpis</h1>
          <h5 class='text-muted' style='overflow-y:hidden;'>$showAutor</h3>
          <div style='margin: 0 auto; width:50%;'>
          <p style='overflow-y:hidden;'>$splitText[0]</p>
          </div>
          </div>";



  }
}



?>
