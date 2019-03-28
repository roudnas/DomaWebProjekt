<?php

  if (isset($_POST['imgUploadSubmitBtn'])) {
    $file = $_FILES['imgUploadFile'];
    $fileName = $_FILES['name'];
    $fileTmpName = $_FILES['tmp_name'];
    $fileSize = $_FILES['size'];
    $fileError = $_FILES['error'];
    $fileType = $_FILES['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowedTypes = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowedTypes)) {
      if ($fileError === 0) {
        if ($fileSize < 50000) {
          $fileNameNew = uniqid("", true).".".$fileActualExt;
          $fileDestination = 'public/images/profileImg/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          header('Location ../ucet.php?success=uploadedSucessfuly');
          exit();
        }else {
          header('Location ../ucet.php?error=fileIsTooBig');
          exit();
        }
      }else {
        header('Location ../ucet.php?error=WhileFileUpload');
        exit();
      }
    }else {
      header("Location: ../ucet.php?error=incompatibleImgType");

      exit();
    }

  }

 ?>
