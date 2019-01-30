<?php
require 'dbconn.php';
if (isset($_POST['removeButton'])) {
$id = htmlspecialchars($_POST['idCheck']);

if (!empty($id)) {
  $sql2 = "DELETE from articleimgs where articleid = $id";
  $conn->query($sql2);

  $files = glob("../public/images/uploaded/*_id-{$id}.*", GLOB_BRACE);
  foreach ($files as $i) {
    unlink($i) or die("Location: index.php?error=filedeletionerr");
  }

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
