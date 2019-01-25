<?php
function sql_numrows($sql, $conn) {
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
}

function redir_exit($value, $loc = "../index.php", $key = "error") {
  header("Location: $loc?$key=$value");
  exit()
}





?>
