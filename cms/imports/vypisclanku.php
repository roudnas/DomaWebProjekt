    <div class="artTable" id="artTable">
      <tr>
        <th>ID</th>
        <th>Nadpis</th>
        <th>Autor</th>
        <th>Datum</th>
      </tr>


<?php

  require 'dbconn.php';

  mysqli_set_charset($conn, "utf8");

  $sql = "SELECT id,nadpis, autor, datum FROM articles;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $showID = $row[0];
      $showNadpis = $row[1];
      $showAutor = $row[2];
      $showDate = $row[3];
      $time = strtotime($showDate);
      $parsedDate = date("d/m/Y G:i", $time);

      echo "<tr id='zaznam_$showID'>
              <td>$showID</td>
              <td>$showNadpis</td>
              <td>$showAutor</td>
              <td>$parsedDate</td></tr>";
      echo  "</div>";

    }
  }



 ?>
