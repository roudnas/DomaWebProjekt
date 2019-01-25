<?php

require 'dbconn.php';
mysqli_set_charset($conn, "utf8");
$getID = $_GET['id'];
if (isset($getID) && is_numeric($getID)) {

  $sql = "select id, nadpis, autor, text, datum from articles where id = $getID;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  $sql1 = "select name, dir from articleimgs where id = $getID;";
  $result1 = mysqli_query($conn, $sql1);
  $resultCheck1 = mysqli_num_rows($result1);

  if ($resultCheck1 > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $showID = $row[0];
      $showNadpis = $row[1];
      $showAutor = $row[2];
      $showText = $row[3];
      $showDate = $row[4];
      $time = strtotime($showDate);
      $parsedDate = date("d/m/Y G:i", $time);

      echo "<div class='articlesbyid container text-center my-4 py-3 col-10' style='overflow-y:hidden;'>
            <h1 style='overflow-y:hidden;'>$showNadpis</h1>
            <h6 class='text-muted' style='overflow-y:hidden;'>$parsedDate</h6>
            <hr>
            <div class='p-2 mx-auto my-3' style='width:50%;'>
            <p style='overflow-y:hidden;'>$showText</p>
            </div>";
             while($row1 = mysqli_fetch_assoc($result1)) {
               $imgName = $row1['name'];
               $imgDir = $row1['dir'];
      echo "<div class='articleImg card my-2 p-2 col-10 col-md-6 col-lg-3 col-xl-3 mx-auto'><img src='../cms/public/$imgDir'></img></div>";
             }
      echo "<hr><h5 class='text-muted my-3' style='overflow-y:hidden;'>$showAutor</h5>

            </div>";

    }
  } else {
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $showID = $row[0];
        $showNadpis = $row[1];
        $showAutor = $row[2];
        $showText = $row[3];
        $showDate = $row[4];
        $time = strtotime($showDate);
        $parsedDate = date("d/m/Y G:i", $time);

        echo "<div class='articlesbyid container text-center my-4 py-3 col-10' style='overflow-y:hidden;'>
              <h1 style='overflow-y:hidden;'>$showNadpis</h1>
              <h6 class='text-muted' style='overflow-y:hidden;'>$parsedDate</h6>
              <hr>
              <div class='p-2 mx-auto my-3' style='width:50%;'>
              <p style='overflow-y:hidden;'>$showText</p>
              </div>
              <hr><h5 class='text-muted' style='overflow-y:hidden;'>$showAutor</h5>

              </div>";

      }
    }
  }

} else {
  header("Location: devBlog.php");
  exit();
}
?>
