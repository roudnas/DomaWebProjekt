<?php
 session_start();
?>

<html lang="cz">
  <head>
    <meta charset="utf-8">
    <title>Admin system</title>

    <link href="public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
  	 crossorigin="anonymous">
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

    <div class="mainobal" id="mainobal">
      <div class="obal">

        <h1 class="nadpis text-center"><img src="public/images/DomaSoftware.svg" alt="Logo" height="70"></h1>
        <form action="imports/formhandler.php" method="post" class="form-signin py-5">
          <div class="form-group">
            <label for="username" class="sr-only">Your username</label>
            <input class="form-control col-6 mx-auto" id="username" type="text" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="pw" class="sr-only">Your password</label>
            <input class="form-control col-6 mx-auto"type="password" id="pw" name="pw" placeholder="Password">
          </div>
          <button type="submit" name="login-submit" class="btn btn-lg btn-primary">Log-in</button>
          <p class="mt-5 text-muted">&copy; 2018-2019</p>
        </form>
        <?php
        if (isset($_SESSION['userId'])) {
          header("Location: ../cms/index.php");
        }
        ?>
      </div>
    </div>

  </body>
</html>
