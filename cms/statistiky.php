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
    -->

    <?php require 'imports/commonmenu.php'; ?>

    <article class="sekce mt-3" id="sekce3">
      <h1 class="heading"><img class="my-2 mx-2" src="https://img.icons8.com/material/60/000000/combo-chart.png">Statistiky</h1>
      <hr>

      <div class="row justify-content-center">
        <div class="card m-2" style="width:15rem;" data-aos="zoom-in" data-aos-duration="1000">
          <h5 class="card-header">Počet článků celkem</h5>
          <div class="card-body py-5">
            <h1 class="card-title text-center">
              <?php
            include 'imports/dbconn.php';
            $sql = "SELECT count(*) from articles;";
            $qr = mysqli_query($conn, $sql) or die();
            $rsl = mysqli_fetch_array($qr);
            echo $rsl[0];
             ?></h1>
        </div>
  </div>
  <div class="card m-2" style="width:15rem;" data-aos="zoom-in" data-aos-duration="500">
  <h5 class="card-header">Počet adminů a editorů</h5>
  <div class="card-body py-5">
  <h1 class="card-title text-center">
    <?php
  include 'imports/dbconn.php';
  $sql = "SELECT count(*) from users;";
  $qr = mysqli_query($conn, $sql) or die();
  $rsl = mysqli_fetch_array($qr);
  echo $rsl[0];
   ?>
  </h1>
  </div>
  </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
 AOS.init();
</script>
  </body>
</html>
