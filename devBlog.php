<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133561856-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-133561856-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
    <link rel="icon" href="public/images/newLogoJustR.png">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
     crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
     crossorigin="anonymous"></script>
    <title>Doma Software</title>
  </head>
  <body>
    <div class="bodyDiv row justify-content-center">
      <div class="mainobal">

        <header class="menu">
          <nav class="navbar navbar-expand-md navbar-dark" id="navigator">
            <div class="navObal container">

              <a class="navbar-brand" href="index.php"><img src="public/images/DomaSoftware157878.svg" alt="" width="140px" height="40px"></a>
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#MyTogglerNav" aria-controls="#MyTogglerNav"
               aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>

               <section class="collapse navbar-collapse" id="MyTogglerNav">
                 <div class="navbar-nav ml-auto">
                   <a class="nav-item nav-link" href="index.php">Domů</a>
                   <a class="nav-item nav-link" href="oNas.php">O nás</a>
                   <a class="nav-item nav-link" href="coNabizime.php">Co nabízíme</a>
                   <a class="nav-item nav-link active" href="devBlog.php?page=1">DevBlog</a>
                   <a class="nav-item nav-link" href="kontakt.php">Kontakt</a>
                 </div>
               </section>

            </div>
          </nav>
        </header>


        <article class="pageSekce py-3">
          <div class="row justify-content-center">
        <?php require 'imports/showarticles.php';
        ?>
          </div>
          <hr>
          <div class="row justify-content-center">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="devBlog.php?page=<?php if ($_GET['page'] != 1) {
                  echo $_GET['page'] - 1;} else { echo $_GET['page'];}?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <?php require 'imports/paginationgenerator.php'; ?>

              <li class="page-item">
                <a class="page-link" href="devBlog.php?page=<?php echo $_GET['page'] + 1?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          </div>
        </article>

        <footer>
          <div class="row justify-content-center py-3">
            <p class="text-center text-muted">&copy; Dominik Roudný and Martin Malíř<br> 2018/19 </p>
          </div>
        </footer>

      </div>
    </div>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
  </body>
</html>
