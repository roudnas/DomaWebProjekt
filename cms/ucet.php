<?php
session_start();
if (!isset($_SESSION['userId'])) {
  header("Location: ../admin/index.php");


}
?>
<!DOCTYPE html>
<html lang="cs" dir="ltr">
<head>
  <?php require 'imports/commonheader.php';  ?>
</head>

  <body>
    <?php
    require 'imports/statushandler.php';
    require 'imports/commonmenu.php';
    ?>

    <article class="sekce mt-3" id="sekce4">
    <h1 class="heading"><img class="my-2 mx-2" src="https://img.icons8.com/material/60/000000/contacts.png">Účet</h1>
    <hr>
    <table class="table table-striped table-dark col-md-6" style="margin:auto;width:50%;">
        <?php
        require 'imports/userprofile.php';
         ?>
    </table>

<br> <button class='btn btn-dark mb-2 py-2' style="margin:auto;display:block;width:50%;" data-toggle='modal' data-target='#userChangePwModal'>Změnit heslo</button>


  <div class="" style="border:2px solid red;">
    <?php require 'imports/profilepicture.php' ?>
  </div>


<div class="">
  <form class="" action="imports/profilepictureupload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="imgUploadFile" value="">
    <button type="submit" name="imgUploadSubmitBtn">Nahrát fotku</button>
  </form>
</div>

    <div class="modal fade" id="userChangePwModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Změna hesla</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form class="add-admin col-10" action="imports/zmenahesla.php" method="post">
    <div class="form-group">
      <label for="selecto"></label>
        <input type="password" name="oldPw" value="" placeholder="Staré heslo">
        <input type="text" name="username" value="" placeholder="Uživ. jméno">
        <input type="password" name="newPw" value="" placeholder="Nové heslo">
        <input type="password" name="newPwCheck" value="" placeholder="Heslo znovu">
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" type="submit" name="changePw">Změnit</button>
  </form>
  </div>
</div>
</div>
</div>
    <div class="footer mt-5 p-5 text-center" style="border:1px solid rgba(0,0,0,.1);">
      <p>&copy; Doma Software 2019</p>
    </div>
    </article>
    <?php require 'imports/footer.php' ?>

    <script>
    function openNav() {
      document.getElementById('popNav').style.height = "100%";
    }
    function closeNav() {
      document.getElementById('popNav').style.height = "0%";
    }

    function openAutor() {
      document.getElementById('sideAutor').style.width = "250px";
    }
    function closeAutor() {
      document.getElementById('sideAutor').style.width = "0px";
    }
    </script>
    <script type="text/javascript">
      $(function () {
        $('[data-toggle="tooltip"]').tooltip();
      })
    </script>
  </body>
  </html>
