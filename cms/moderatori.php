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
    ?>
    <!--
    <form action="imports/logout.php" method="post">
      <button type="submit" class="log-out form-control btn btn-primary my-3" name="logout-submit" >Log-out</button>
    </form>
  -->
  <?php require 'imports/commonmenu.php'; ?>

    <article class="sekce mt-3" id="sekce2">
      <h1 class="heading"><img class="my-2 mx-2" src="https://img.icons8.com/material/60/000000/user-group-man-man.png">Moderátoři</h1>
      <hr>
      <p class="popis my-3 p-3">&gt; Výpis všech moderátorů vaší stránky. Tito moderátoři se mohou připojit do systému pro správu obsahu.</p>

      <div class="card seznamModeratoru">
        <h3><img class="mx-3" src="https://img.icons8.com/material/48/000000/user-menu-female.png">Seznam moderátorů</h3>
        <hr>
        <table class="table table-striped table-dark">
          <tr>
            <?php
            require 'imports/vypisAdminu.php';
             ?>
          </tr>
        </table>

        <button class='btn btn-dark mb-2' data-toggle='modal' data-target='#userDeleteModal'>Smazat uživatele</button>

    <div class="modal fade" id="userDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Smazat uživatele</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="imports/removeuser.php" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="selecto">Vyberte ID uživatele, kterého chcete odstranit.</label>
          <select class="custom-select" id="selecto" name="idCheck">
            <?php
            include 'imports/showusersmodal.php';
            ?>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit" name="removeUser">Smazat</button>
      </form>
      </div>
    </div>
    </div>
    </div>

      </div>

      <div class="wrapper my-3">
        <form class="add-admin col-10 mx-auto card" action="imports/zapisAdminu.php" method="post">
          <h3><img class="mx-3" src="https://img.icons8.com/material/48/000000/user-male-circle.png">Nový moderátor</h3>
          <hr>
          <div class="form-group">
            <label for="inputJmeno">Uživatelské jméno</label>
            <input type="text" name="username" class="form-control" value="" placeholder="Uživatelské jméno" required>
          </div>
          <div class="form-group">
            <label for="inputHeslo">Heslo</label>
            <input type="password" name="password" class="form-control" value="" placeholder="Heslo" required>
          </div>
          <div class="form-group">
            <label for="inputName">Jméno</label>
            <input type="text" name="name" class="form-control" value="" placeholder="Jméno" required>
          </div>
          <div class="form-group">
            <label for="inputName">Příjmení</label>
            <input type="text" name="surname" class="form-control" value="" placeholder="Příjmení" required>
          </div>
          <div class="form-group">
            <label for="inputPozition">Pozice</label>
            <select class="custom-select" name="position">
              <option value="Admin">Admin</option>
              <option value="Editor">Editor</option>
            </select>
          </div>
          <button class="btn btn-dark" type="submit" name="admin-submit">Přidat moderátora!</button>
        </form>
      </div>

      <div class="footer mt-5 p-5 text-center" style="border:1px solid rgba(0,0,0,.1);">
        <p>&copy; Doma Software 2019</p>
      </div>
    </article>
    <?php include 'imports/footer.php' ?>
    <!--
    <nav class="navbar navbar-expand-md bg-dark navbar-dark ml-auto" id="navigator">
      <div class="container-fluid">
        <a class="navbar-brand my-1" href="index.php"><img src="public/images/DomaSoftware.svg" alt="Logo" width="160" height="30"></a>
        <button type="button" class="btn btn-dark my-1" name="menuOpener" onclick="openNav()"><img src="https://img.icons8.com/material/30/000000/squared-menu.png"></button>
        <section class="" id="MyTogglerNav">
          <div class="navbar-nav ml-auto btn-sm btn-dark">
            <a class="nav-item nav-link" href="ucet.php"><?php $usr = $_SESSION['userUId']; echo "Howdy, $usr" . "<img class='mx-3' src='https://img.icons8.com/material/30/000000/user-male-circle.png'>"; ?></a>
          </div>
        </section>
      </div>
    </nav>
  -->
    <script>
    function openNav() {
      document.getElementById('popNav').style.height = "100%";
    }
    function closeNav() {
      document.getElementById('popNav').style.height = "0%";
    }
    </script>
    <script type="text/javascript">
      $(function () {
        $('[data-toggle="tooltip"]').tooltip();
      })
    </script>
  </body>
</html>
