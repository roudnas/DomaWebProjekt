<?php

  require 'dbconn.php';

  if (isset($_POST['admin-submit'])) {
    mysqli_query($conn, $sql);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $comment = $_POST['comment'];
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql2 = "INSERT INTO users (name, password, comment) VALUES ('$username', '$hash', '$comment');";

  }

  if (isset($_POST['admin-submit']) && $username != null && $password != null) {
    mysqli_query($conn, $sql2);
    header("Location: ../index.php?adminadd=true");
    exit();
  }

  if (isset($_POST['admin-submit']) && $username == null) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }

  if (isset($_POST['admin-submit']) && $password == null) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }

 ?>
