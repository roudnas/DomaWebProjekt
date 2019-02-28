<html lang="cs" dir="ltr">
  <body>
    <div class="adminTable">

    </div>
  </body>
</html>

<?php

  require 'dbconn.php';
  mysqli_set_charset($conn, "utf8");

  $userId = $_SESSION['userId'];

  $sql = "SELECT id, username, name, surname, position FROM users WHERE id = $userId;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_array($result)) { //Pro ziskani vsech dat z databaze
      $showID = $row[0];
      $showUserName = $row[1];
      $showName = $row[2];
      $showSurname = $row[3];
      $showPosition = $row[4];

      echo "

      <tr>
        <th>Vaše id: </th><td>$showID</td>
      </tr>
      <tr>
        <th>Uživatelské jméno: </th><td>$showUserName</td>
      </tr>
      <tr>
        <th>Jméno: </th><td>$showName</td>
      </tr>
      <tr>
        <th>Příjmení: </th><td>$showSurname</td>
      </tr>
      <tr>
        <th>Pozice: </th><td>$showPosition</td>
      </tr>

            ";

          }
        }
 ?>
