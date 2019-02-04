<?php
require 'dbconn.php';
if (isset($_POST['removeUser'])) {
$id = htmlspecialchars($_POST['idCheck']);

  $sql = "DELETE from users where id = ?";
  $stmt = mysqli_stmt_init($conn);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    header("Location: ../moderatori.php?success=deleteuser");
    exit();
  } else {
    header("Location: ../moderatori.php?error=sqlerror");
    exit();
  }
} else {
  header("Location: ../moderatori.php?error=emptyfields");
  exit();
}

?>
