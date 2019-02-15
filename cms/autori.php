<?php
session_start();
if (!isset($_SESSION['userId'])) {
  header("Location: ../admin/index.php");
}
?>
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
     <link rel="stylesheet" href="public/css/style.css">
    <link rel="icon" href="public/images/newLogoJustR.png">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
     crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
     crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
     crossorigin="anonymous"></script>
    <script src="public/js/main.js" charset="utf-8"></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark ml-auto" id="navigator">
      <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#MyTogglerNav" aria-controls="#MyTogglerNav"
         aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>

        <section class="collapse navbar-collapse" id="MyTogglerNav">
          <div class="navbar-nav ml-auto btn-sm btn-dark">
            <a class="nav-item nav-link" href="#a5"><?php $usr = $_SESSION['userUId']; echo "Howdy, $usr" . "<img class='mx-3' src='https://img.icons8.com/material/30/000000/user-male-circle.png'>"; ?></a>
          </div>
        </section>

      </div>
    </nav>

    <?php
    require 'imports/statushandler.php';
    ?>

    <article class="menu">
      <nav class="sidenav nav nav-tabs flex-column flex-sm-colum" id="sidenav">
    	<a class="navbar-brand mt-3 mb-4 ml-3" href="index.php"><img src="public/images/DomaSoftware.svg" alt="" width="100%" height="auto"></a>
    <div data-toggle="tooltip" data-placement="right" title="Správa obsahu"><a class="sidenav-link text-sm-center nav-link" href="index.php"><img class="my-2 mx-2" src="https://img.icons8.com/material/24/000000/document.png"></a></div>
    <div data-toggle="tooltip" data-placement="right" title="Zprávy"><a class="sidenav-link text-sm-center nav-link" href="zpravy.php"><img class="my-2 mx-2" src="https://img.icons8.com/material/24/000000/chat.png"></a></div>
    <div data-toggle="tooltip" data-placement="right" title="Moderátoři"><a class="sidenav-link text-sm-center nav-link" href="moderatori.php"><img class="my-2 mx-2" src="https://img.icons8.com/material/24/000000/user-group-man-man.png"></a></div>
    <div data-toggle="tooltip" data-placement="right" title="Statistiky"><a class="sidenav-link text-sm-center nav-link" href="statistiky.php"><img class="my-2 mx-2" src="https://img.icons8.com/material/24/000000/combo-chart.png"></a></div>
    <div data-toggle="tooltip" data-placement="right" title="Autoři"><a class="sidenav-link text-sm-center nav-link active" href="autori.php"><img class="my-2 mx-2" src="public/images/us.svg" height="24px" width="24px"></a></div>
    <div data-toggle="tooltip" data-placement="right" title="Účet"><a class="sidenav-link text-sm-center nav-link" href="ucet.php"><img class="my-2 mx-2" src="https://img.icons8.com/material/24/000000/contacts.png"></a></div>
    <form action="imports/logout.php" method="post">
      <button type="submit" class="form-control btn btn-primary my-3" name="logout-submit" >Log-out</button>
    </form>
  </nav>
    </article>


          <article class="sekce" id="sekce4">
            <h1 class="heading"><img class="my-2 mx-2" src="public/images/us.svg" height="50px" width="50px">Autoři</h1>
            <hr>
            <p class="popis my-3 p-3">&gt; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="footer mt-5 p-5 text-center" style="border:1px solid rgba(0,0,0,.1);">
              <p>&copy; Doma Software 2019</p>
            </div>
          </article>

          <script type="text/javascript">
            $(function () {
              $('[data-toggle="tooltip"]').tooltip();
            })
          </script>
  </body>
</html>
