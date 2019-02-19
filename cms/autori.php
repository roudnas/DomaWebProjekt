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
    <!---
    <form action="imports/logout.php" method="post">
      <button type="submit" class="log-out form-control btn btn-primary my-3" name="logout-submit" >Log-out</button>
    </form>
  --->

        <?php require 'imports/commonmenu.php'; ?>

          <article class="sekce mt-3" id="sekce4">
            <h1 class="heading"><img class="my-2 mx-2" src="public/images/us.svg" height="50px" width="50px">Autoři</h1>
            <hr>
            <p class="popis my-3 p-3">&gt; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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
