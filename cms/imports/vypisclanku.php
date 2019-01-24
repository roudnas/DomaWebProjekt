    <div class="artTable" id="artTable">
      <tr>
        <th>ID</th>
        <th>Nadpis</th>
        <th>Autor</th>
      </tr>


<?php

  require 'dbconn.php';

  mysqli_set_charset($conn, "utf8");

  $sql = "SELECT id,nadpis, autor FROM articles;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $showID = $row[0];
      $showNadpis = $row[1];
      $showAutor = $row[2];

      echo "<tr id='zaznam_$showID'>
              <td>$showID</td>
              <td>$showNadpis <button class='btn btn-dark mx-2' data-toggle='modal' data-target='#artRemoveModal'>Odstranit</button></td>
              <td>$showAutor</td></tr>";
      echo  "</div>";

    }
  }

 ?>
