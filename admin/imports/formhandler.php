<?php

if (isset($_POST['login-submit'])) {

  require 'dbconn.php';

  $usrname = $_POST['username'];
  $usrpw = $_POST['pw'];

  if (empty($usrname) || empty($usrpw)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  } else {

    $sql = "select * from users where username=?;";
    mysqli_set_charset($conn, "utf8");
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();

    } else {

      mysqli_stmt_bind_param($stmt, "s", $usrname);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {

        $pwCheck = password_verify($usrpw, $row["password"]);

        if ($pwCheck == false) {
          header("Location: ../index.php?error=wrongpassword");
          exit();

        } elseif ($pwCheck == true) {

          session_start();
          $_SESSION['userId'] = $row['id'];
          $_SESSION['userUId'] = $row['name'];
          $_SESSION['userSur'] = $row['surname'];
          header("Location: ../index.php?login=true");
          exit();

        } else {
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }

      } else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }

} else {
  header("Location: ../index.php");
  exit();
}
?>
