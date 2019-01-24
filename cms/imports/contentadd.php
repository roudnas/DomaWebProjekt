<?php
$phpFileUploadErrors = array(
0 => 'There is no error, the file was uploaded succesfully!',
1 => 'The uploaded file exceeds the upload_max_filesize directive!',
2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive!',
3 => 'The uploaded file was only partially uploaded!',
4 => 'No file was uploaded!',
5 => 'Missing a tmp folder!',
6 => 'Failed to write the file to disk',
7 => 'A PHP extension stopped the file upload.!'
);

if (isset($_POST['content-submit'])) {
  require 'dbconn.php';
  $header = htmlspecialchars($_POST['nadpis']);
  $autor = htmlspecialchars($_POST['autor']);
  $obsah = htmlspecialchars($_POST['textarea']);

  if (!empty($header) and !empty($autor) and !empty($obsah) ) {
    if (isset($_FILES['userfile']) and !empty($_FILES['userfile']['name'])) {
      $file_array = reArrayFiles($_FILES['userfile']);
      for ($i=0; $i < count($file_array); $i++ ) {
        if ($file_array[$i]['error']) {
          header("Location: index.php?error=fileupload");
        } else {
          $extensions = array('jpg', 'png', 'gif', 'svg', 'jpeg');
          $file_ext = explode('.', $file_array[$i]['name']);
          $name = $file_ext[0];
          $file_ext = end($file_ext);
          if (!in_array($file_ext, $extensions)) {
            header("Location: index.php?error=wrongfileext");
          } else {

            $img_dir = "../public/images/uploaded/".$file_array[$i]['name'];
            move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);

                  $select = "SELECT COUNT(*) FROM articles;";
                  $selectResult = mysqli_query($conn, $select);
                  $artIDArr = mysqli_fetch_array($selectResult);
                  $artID = $artIDArr[0] + 1;


                  $sql = "INSERT into articles(id, nadpis, autor, text, datum) values(?,?,?,?,?);";
                  $sql2 = "INSERT into articleimgs (id, name, dir) values($artID, '$name', '$img_dir');";
                  $conn->query($sql2) or die(header("Location: index.php?error=fileuploaderror"));
                  $stmt = mysqli_stmt_init($conn);
                  mysqli_set_charset($conn, "utf8");
                  if (mysqli_stmt_prepare($stmt, $sql)) {
                    date_default_timezone_set("Europe/Prague");
                    $datum = date("Y:m:d H:i");
                    mysqli_stmt_bind_param($stmt, "sssss", $artID, $header, $autor, $obsah, $datum);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?contentadd=true&fileupload=true");
                    exit();

                  } else {
                    header("Location: ../index.php?error=sqlerror");
                    exit();
                  }
          }
        }
      }

    } else {
      $select = "SELECT COUNT(*) FROM articles;";
      $selectResult = mysqli_query($conn, $select) or die(header("Location: index.php?error=counterror"));
      $artIDArr = mysqli_fetch_array($selectResult);
      $artID = $artIDArr[0] + 1;

      $sql = "INSERT into articles(id, nadpis, autor, text) values(?,?,?,?);";
      $stmt = mysqli_stmt_init($conn);
      mysqli_set_charset($conn, "utf8");
      if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param($stmt, "ssss", $artID, $header, $autor, $obsah);
        mysqli_stmt_execute($stmt);
        header("Location: ../index.php?contentadd=true&fileupload=false");
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

function pre_r($array) {
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
function reArrayFiles($file_post) {
  $file_ary = array();
  $file_count = count($file_post['name']);
  $file_keys = array_keys($file_post);

  for ($i=0; $i < $file_count; $i++) {
    foreach ($file_keys as $key) {
      $file_ary[$i][$key] = $file_post[$key][$i];
    }
  }
  return $file_ary;
}
?>
