<?php
if (isset($_POST['content-submit'])) {
  require 'dbconn.php';
  $header = $_POST['nadpis'];
  $autor = $_POST['autor'];
  $obsah = $_POST['textarea'];

  if (!empty($header) && !empty($autor) && !empty($obsah) ) {

    $sql = "insert into articles(nadpis, autor, text) values(?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_set_charset($conn, "utf8");
    if (mysqli_stmt_prepare($stmt, $sql)) {

      mysqli_stmt_bind_param($stmt, "sss", $header, $autor, $obsah);
      mysqli_stmt_execute($stmt);
      header("Location: ../index.php?contentadd=true");
      exit();

    } else {
      header("Location: ../index.php?error=sqlerror");
      exit();

    }
  } else {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }

} else {
  header("Location: ../index.php");
  exit();
}


?>
