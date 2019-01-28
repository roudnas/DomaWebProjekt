<?php

  if (isset($_POST['changePw'])) {
    require 'dbconn.php';
    mysqli_set_charset($conn, "utf8");
    $oldPw = $_POST['oldPw'];
    $newPw = $_POST['newPw'];
    $pwCheck = $_POST['$pwCheck'];

  }

 ?>
