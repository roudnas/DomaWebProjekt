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

    <article class="sekce mt-3" id="sekce3">
      <h1 class="heading"><img class="my-2 mx-2" src="https://img.icons8.com/material/60/000000/chat.png">Zprávy</h1>
      <hr>


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
    </script>
    <script type="text/javascript">
      $(function () {
        $('[data-toggle="tooltip"]').tooltip();
      })
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
 AOS.init();
</script>
  </body>
</html>
