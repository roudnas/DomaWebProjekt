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
      $sql = "SELECT username,password FROM users WHERE username = '$username';";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $oldPwDb = $row['password'];

          $oPwCheck = password_verify($oldPw, $row['password']);

          if ($oPwCheck == false) {
            header("Location: ../ucet.php?wrongoldpassword");
            exit();

          }elseif ($oPwCheck == true && !empty($username) && !empty($newPw) && $newPw == $pwCheck) {
            $sql2 = "UPDATE users SET password = '$hash' WHERE username = '$username';";
            mysqli_query($conn, $sql2) or die(header("Location: ../ucet.php?sqlerror"));
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
