<?php
session_start();
if (isset($_POST['logout-submit'])) {
  session_unset();
  header("Location: ../../admin/index.php ");
}



?>
