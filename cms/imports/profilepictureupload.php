<?php

  if (isset($_POST['imgUploadSubmitBtn'])) {

    $fileName = $_FILES['imgUploadFile']['name'];
    $fileTmpName = $_FILES['imgUploadFile']['tmp_name'];
    $fileSize = $_FILES['imgUploadFile']['size'];
    $fileError = $_FILES['imgUploadFile']['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = end($fileExt);

    $allowedTypes = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowedTypes)) {
      if ($fileError === 0) {
        if ($fileSize < 50000) {
          $fileNameNew = uniqid("", true).".".$fileActualExt;
          $fileDestination = '../public/images/profileImg/'."$fileNameNew";
          move_uploaded_file($fileTmpName, $fileDestination);
          header("Location ../ucet.php?success=uploadedSucessfuly");
          exit();
        }else {
          header("Location ../ucet.php?error=fileIsTooBig");
          exit();
        }
      }else {
        header("Location ../ucet.php?error=WhileFileUpload");
        exit();
      }
    }else {
      header("Location: ../ucet.php?error=incompatibleImgType");
      exit();
    }

  }

 ?>
