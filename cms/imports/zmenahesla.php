<?php

  if (isset($_POST['changePw'])) {
    require 'dbconn.php';
    mysqli_set_charset($conn, "utf8");
    $oldPw = $_POST['oldPw'];
    $username = $_POST['username'];
    $newPw = $_POST['newPw'];
    $pwCheck = $_POST['newPwCheck'];
    $hash = password_hash($newPw, PASSWORD_BCRYPT);

    if (!empty($oldPw) && !empty($username) && !empty($newPw) && !empty($pwCheck)) {
      $sql = "SELECT password, username FROM users WHERE id = 2;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $oldPwDb = $row ['password'];

          $pwCheck = password_verify($oldPw, $row["password"]);

          if ($pwCheck == false) {
            header("Location: ../ucet.php?wrongoldpassword");
            exit();
          }elseif ($pwCheck && !empty($username) && !empty($newPw) && $newPw == $pwCheck) {
            $sql2 = "UPDATE users SET password = $hash WHERE id = 2";
            mysqli_query($conn, $sql2);
            header("Location: ../ucet.php?passwordchanged");
            exit();
          }

        }
      }
    }else {
      header("Location: ../ucet.php?error=emptyfields");
      exit();
    }


  }

 ?>
