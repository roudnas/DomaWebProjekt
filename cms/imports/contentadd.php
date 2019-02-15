<?php
session_start();

if (isset($_POST['content-submit'])) {
  require 'dbconn.php';
  mysqli_set_charset($conn, "utf8");
  date_default_timezone_set("Europe/Prague");

  $uid = $_SESSION['userUId'];
  $usur = $_SESSION['userSur'];
  $header = htmlspecialchars($_POST['nadpis']);
  $autor =  "$uid $usur";
  $obsah = $_POST['textarea'];
  $datum = date("Y:m:d H:i");

  //Get the max article ID and set a new one by incrementing it
  $select = "SELECT max(id) FROM articles;";
  $selectResult = mysqli_query($conn, $select) or die(header("Location: ../index.php?error=idsqlerror"));
  $artIDArr = mysqli_fetch_array($selectResult);
  $artID = $artIDArr[0] + 1;

  if (!empty($header) and !empty($obsah) ) {
    if (isset($_FILES['userfile']) and !empty($_FILES['userfile']['name'])) {
        $file_array = $_FILES['userfile'];
        //File upload
        for ($i=0; $i < count($file_array); $i++ ) {
          if ($file_array['error'][$i]) {
            header("Location: ../index.php?error=fileupload");
          } else {
            $extensions = array('jpg', 'png', 'gif', 'svg', 'jpeg');
            $file_ext = explode('.', $file_array['name'][$i]);
            $name = $file_ext[0];
            $file_ext = end($file_ext);
            if (!in_array($file_ext, $extensions)) {
              header("Location: ../index.php?error=wrongfileext");
            } else {
                    $img_dir = "../public/images/uploaded/".$name."_id-$artID.".$file_ext;
                    move_uploaded_file($file_array['tmp_name'][$i], $img_dir);
                    $sql2 = "INSERT into articleimgs (name, dir, articleid) values(?,?,?);";
                    $stmt2 = mysqli_stmt_init($conn);
                    if (mysqli_stmt_prepare($stmt2, $sql2)) {
                      mysqli_stmt_bind_param($stmt2, "ssi", $name, $img_dir, $artID);
                      mysqli_stmt_execute($stmt2);
                    } else {
                      header("Location: ../index.php?error=sqlerrorinFor");
                      exit();
                    }
            }
          }
        }

        //Article upload
        $sql = "INSERT into articles(id, nadpis, autor, text, datum) values(?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssss", $artID, $header, $autor, $obsah, $datum);
            mysqli_stmt_execute($stmt);
            header("Location: ../index.php?success=contentadd&success=fileupload");
            exit();
        } else {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }

    } else {
      $sql = "INSERT into articles(id, nadpis, autor, text, datum) values(?,?,?,?,?);";
      $stmt = mysqli_stmt_init($conn);
      if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssss", $artID, $header, $autor, $obsah, $datum);
        mysqli_stmt_execute($stmt);
        header("Location: ../index.php?success=contentadd&error=fileupload");
        exit();

      } else {
        header("Location: ../index.php?error=sqlerror");
        exit();

      }
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
