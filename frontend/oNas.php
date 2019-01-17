<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                   <a class="nav-item nav-link" href="devBlog.php">DevBlog</a>
                   <a class="nav-item nav-link" href="kontakt.php">Kontakt</a>
                 </div>
               </section>

            </div>
          </nav>
        </header>

      </header>

      <article class="pageSekce py-3 mt-3">
        <section class="py-3 text-center container">
          <div class="row justify-content-center my-5">
            <div data-aos="zoom-in-up" data-aos-duration="1000" class="onasPerson col-12 col-sm-12 col-md-6 col-lg-6">
              <a href="https://roudnas.tk">
                <img src="public/images/dmnk.svg" alt="" height="250" width="250"></a>
                <h3 class="py-3">Dominik</h3>
              <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div data-aos="zoom-in-up" data-aos-duration="1000" class="onasPerson col-12 col-md-6 col-sm-12 col-lg-6">
              <a href="https://roudnas.tk/frontend"><img src="public/images/mrtn.svg" alt="" width="250" height="250"></a>
              <h3 class="py-3">Martin</h3>
              <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </section>
      </article>

      <article class="pageSekce onasSekce" style="color:#FFF;">

        <div class="container my-3" style="background-color:#292e48;">
        <h3 class="text-center py-3">Naše projekty</h3>
        <p class="text-center py-3">Přehlídka všech prací, které jsme vytvořili, nebo se jich zúčastnili!</p>
      </div>

        <div class="row justify-content-center mt-5">

          <div data-aos="zoom-in" data-aos-duration="1000" class="onasCards card m-2 p-2 col-10 col-md-6 col-lg-3 col-xl-3">
          <a href="https://roudnas.tk"> <div class="card-img" id="card1"></div> </a>
          </div>


          <div data-aos="zoom-in" data-aos-duration="700" class="onasCards card m-2 p-2 col-10 col-md-6 col-lg-3 col-xl-3">
          <a href="https://roudnas.tk/frontend"><div class="card-img" id="card2"></div></a>
          </div>


          <div data-aos="zoom-in" data-aos-duration="500" class="onasCards card m-2 p-2 col-10 col-md-6 col-lg-3 col-xl-3">
          <a href="https://roudnas.tk/cms"><div class="card-img" id="card3"></div></a>
          </div>


          <div data-aos="zoom-in" data-aos-duration="1200" class="onasCards card m-2 p-2 col-10 col-md-6 col-lg-3 col-xl-3">
          <a href="https://roudnas.tk"><div class="card-img" id="card4"></div></a>
          </div>

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
