<?php

  if (isset($_POST['changePw'])) {
    require 'dbconn.php';
    mysqli_set_charset($conn, "utf8");
    $oldPw = $_POST['oldPw'];
    $username = $_POST['username'];
    $newPw = $_POST['newPw'];
    $pwCheck = $_POST['$pwCheck'];
    $hash = password_hash($newPw, PASSWORD_BCRYPT);

    $sql = "SELECT password FROM users WHERE username = $username;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $oldPwDb = $row ['password'];

        

      }
    }

  }

 ?>
