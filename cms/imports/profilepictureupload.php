<?php

  if (isset($_POST['imgUploadSubmitBtn'])) {
<<<<<<< HEAD
    $file = $_FILES['imgUploadFile'];
    $fileName = $_FILES['name'];
    $fileTmpName = $_FILES['tmp_name'];
    $fileSize = $_FILES['size'];
    $fileError = $_FILES['error'];
    $fileType = $_FILES['type'];
=======
    define('MB', 1048576);
    $fileName = $_FILES['imgUploadFile']['name'];
    $fileTmpName = $_FILES['imgUploadFile']['tmp_name'];
    $fileSize = $_FILES['imgUploadFile']['size'];
    $fileError = $_FILES['imgUploadFile']['error'];
>>>>>>> 250380ac01cde57c10e4553d03d11bf75bf30087

    $fileExt = explode('.', $fileName);
    $fileActualExt = end($fileExt);

    $allowedTypes = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowedTypes)) {
      if ($fileError === 0) {
        if ($fileSize < 10*MB) {
          $fileNameNew = uniqid("", true).".".$fileActualExt;
          $fileDestination = '../public/images/profileImg/'."$fileNameNew";
          move_uploaded_file($fileTmpName, $fileDestination);
<<<<<<< HEAD
          header('Location ../ucet.php?success=uploadedSucessfuly');
          exit();
        }else {
          header('Location ../ucet.php?error=fileIsTooBig');
          exit();
        }
      }else {
        header('Location ../ucet.php?error=WhileFileUpload');
=======
          header("Location: ../ucet.php?success=uploadedSucessfuly");
          exit();
        }else {
          header("Location: ../ucet.php?error=fileIsTooBig");
          exit();
        }
      }else {
        header("Location: ../ucet.php?error=WhileFileUpload");
>>>>>>> 250380ac01cde57c10e4553d03d11bf75bf30087
        exit();
      }
    }else {
      header("Location: ../ucet.php?error=incompatibleImgType");
<<<<<<< HEAD

=======
>>>>>>> 250380ac01cde57c10e4553d03d11bf75bf30087
      exit();
    }
  }
?>
