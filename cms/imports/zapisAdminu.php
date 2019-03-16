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

    if (!empty($username) && !empty($password) && !empty($name) && !empty($surname) && !empty($position)) {
      $sql2 = "INSERT INTO users (username, password, name, surname, position) VALUES (?,?,?,?,?);";
      $stmt = mysqli_stmt_init($conn);

      if (mysqli_stmt_prepare($stmt, $sql2)) {
        mysqli_stmt_bind_param($stmt, "sssss", $username, $hash, $name, $surname, $position);
        mysqli_stmt_execute($stmt);

        header("Location: ../moderatori.php?success=adminadd");

        exit();

      }else {
        header("Location: ../moderatori.php?error=sqlerror");
        exit();
      }
    }else {
      header("Location: ../moderatori.php?error=emptyfields");
      exit();
    }

  }else {
    header("Location: ../moderatori.php");
    exit();
  }

  $sql3 = "SELECT id FROM users WHERE username = '$username' AND name = '$name';";
  $result = mysqli_query($conn, $sql3);
  if (mysqli_num_rows($result) > 0) {
    while (row_fetch_assoc($result)) {
      $userid = $row['id'];
      $sql = "INSERT INTO profileimg (userid, status) VALUES ($userid, 1);";
      mysqli_query($conn, $sql);
      exit();
    }
  }else {
    header("Location: ../moderatori.php?nejdeto");
    exit();
  }


 ?>
