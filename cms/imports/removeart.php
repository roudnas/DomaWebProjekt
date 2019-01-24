<?php
require 'dbconn.php';
if (isset($_POST['removeButton'])) {
$id = htmlspecialchars($_POST['idCheck']);

if (!empty($id)) {
  $sql2 = "DELETE from articleimgs where id = $id";
  $conn->query($sql2);
  $sql = "DELETE from articles where id = ?";
  $stmt = mysqli_stmt_init($conn);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    header("Location: ../index.php?deletearticle=true");
    exit();
  } else {
    header("Location: ../index.php?error=sqlerror");
    exit();
  }



} else {
  header("Location: ../index.php?error=emptyfields");
  exit();
}



}
?>
