<?php

  if (isset($_POST['imgUploadSubmitBtn'])) {
    $file = $_FILE['imgUploadFile'];
    $fileName = $_FILE['name'];
    $fileTmpName = $_FILE['tmp_name'];
    $fileSize = $_FILE['size'];
    $fileError = $_FILE['error'];
    $fileType = $_FILE['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowedTypes = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowedTypes)) {
      if ($fileError === 0) {
        if ($fileSize < 50000) {
          $fileNameNew = uniqid("", true).".".$fileActualExt;
          $fileDestination = 'public/images/profileImg/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          header('Location ../ucet.php?uploadedSucessfuly');
          exit();
        }else {
          header('Location ../ucet.php?fileIsTooBig');
          exit();
        }
      }else {
        header('Location ../ucet.php?errorWhileFileUpload');
        exit();
      }
    }else {
      header("Location: ../ucet.php?incompatibleImgType");
      exit();
    }

  }

 ?>
