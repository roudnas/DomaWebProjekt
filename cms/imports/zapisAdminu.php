<?php

  require 'dbconn.php';

  if (isset($_POST['admin-submit'])) {
    mysqli_query($conn, $sql);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $pozition = $_POST['pozition'];
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql2 = "INSERT INTO users (username, password, name, surname, pozition) VALUES ('$username', '$hash', '$name', '$surname', '$pozition');";

  }

  if (isset($_POST['admin-submit']) && $username != null && $password != null && $pozition != null && $name !=null && $surname != null) {
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
