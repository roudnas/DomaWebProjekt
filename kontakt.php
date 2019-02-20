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
                   <a class="nav-item nav-link" href="devBlog.php?page=1">DevBlog</a>
                   <a class="nav-item nav-link active" href="kontakt.php">Kontakt</a>
                 </div>
               </section>

            </div>
          </nav>
        </header>

        <section class="pageSekce col-10 py-5" style="margin:0 auto;">
          <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading..</span>
          </div>
          <form method="post" action="contactform.php">
            <div class="form-group">
              <label for="emailinput">Váš email</label>
              <input name="mail" type="email" class="form-control" id="mail" placeholder="user@example.com" required>
            </div>
            <div class="form-group">
              <label for="emailinput">Předmět</label>
              <input name="subject" type="text" class="form-control" id="subject" placeholder="Dotaz" required>
            </div>
            <div class="form-group">
              <label for="emailinput">Jméno</label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="emailinput">Přijmení</label>
              <input name="surname" type="text" class="form-control" id="surname" placeholder="Surname" required>
            </div>
            <div class="form-group">
              <label for="textarea">Text</label>
              <textarea name="zprava" id="zprava" class="form-control" id="textarea" rows="10" placeholder="Dobrý den, zaujala mě vaše nabídka, chci vědět více..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </section>


        <footer>
          <div class="row justify-content-center py-3">
            <p class="text-center text-muted">&copy; Dominik Roudný and Martin Malíř<br> 2018/19 </p>
          </div>

        </footer>
      </div>
    </div>

  </body>
</html>
