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

        <?php require 'imports/commonmenu.php'; ?>

          <article class="sekce mt-3" id="sekce4">
            <h1 class="heading"><img class="my-2 mx-2" src="public/images/us.svg" height="50px" width="50px">Autoři</h1>
            <hr>
            <p class="popis my-3 p-3">&gt; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="footer mt-5 p-5 text-center" style="border:1px solid #A7ACB5;">
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
