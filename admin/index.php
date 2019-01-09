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
        <h1 class="nadpis">Admin system login</h1>
        <form action="imports/formhandler.php" method="post">
          <div class="form-group">
            <label for="username">Your username</label>
            <input type="text" name="username" value="" placeholder="admin">
          </div>
          <div class="form-group">
            <label for="pw">Your password</label>
            <input type="password" name="pw" value="" placeholder="*********">
          </div>
          <button type="submit" name="login-submit">Log-in</button>
        </form>
        <?php
        if (isset($_SESSION['userId'])) {
          header("Location: ../cms/index.php");
        } else {
          echo '<p class="status">Neprihlaseno..</p>';
        }
        ?>
      </div>
    </div>

  </body>
</html>
