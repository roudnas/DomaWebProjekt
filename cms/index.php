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
  <link rel="stylesheet" href="public/css/bubbles.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

  <body>
    <?php
    require 'imports/statushandler.php';
    ?>

        <?php require 'imports/commonmenu.php'; ?>

          <article class="sekce mt-3" id="sekce4" style="opacity: 0.9;background: #485563 !important;background: -webkit-linear-gradient(to right, #29323c, #485563);background: linear-gradient(to right, #29323c, #485563) !important;">

            <div class="row justify-content-center">
              <img class="my-3" src="public/images/DomaSoftware.svg" alt="Logo" width="200" height="60">
              <p class="text-center" style="font-size:1.5rem;">&copy;</p>
            </div>
            <hr style="background-color:#fff;">

            <div class="Bubbles">
              <div class="row justify-content-center">
                <a data-aos="zoom-in-up" data-aos-duration="700" class="BubblesLink m-5" href="obsah.php"><img class="my-4" src="https://img.icons8.com/material/50/000000/document.png"></a>
                <a data-aos="zoom-in-up" data-aos-duration="1000" class="BubblesLink m-5" href="zpravy.php"><img class="my-4" src="https://img.icons8.com/material/50/000000/chat.png"></a>
              </div>
            <div class="row justify-content-center">
              <a data-aos="zoom-in-up" data-aos-duration="900" class="BubblesLink m-5" href="moderatori.php"><img class="my-4" src="https://img.icons8.com/material/50/000000/user-group-man-man.png"></a>
              <a data-aos="zoom-in-up" data-aos-duration="500" class="BubblesLink m-5" href="statistiky.php"><img class="my-4" src="https://img.icons8.com/material/50/000000/combo-chart.png"></a>
              <a data-aos="zoom-in-up" data-aos-duration="600" class="BubblesLink m-5" href="autori.php"><img class="my-4" src="public/images/us.svg" height="50px" width="50px"></a>
            </div>
            </div>

          </article>
          <?php require 'imports/footer.php' ?>

          <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
          <script>
          AOS.init();

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
