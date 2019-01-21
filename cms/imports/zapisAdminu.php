<?php

  require 'dbconn.php';
  mysqli_set_charset($conn, "utf8");

  if (isset($_POST['admin-submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $position = $_POST['position'];
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql2 = "INSERT INTO users (username, password, name, surname, position) VALUES ('$username', '$hash', '$name', '$surname', '$position');";

  }

  if (isset($_POST['admin-submit']) && $username != null && $password != null && $position != null && $name !=null && $surname != null) {
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
