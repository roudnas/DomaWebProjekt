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
  <body data-spy="scroll" data-target=".nav" data-offset="0">
    <article class="menu">
      <nav class="nav nav-pills flex-column flex-sm-column">
    <a class="navbar-brand my-3" href="#sekce1"><div class="brandimg"></div></a>
    <hr class="my-3" style="background-color: rgba(255,255,255,0.15);">
    <a class="text-sm-center nav-link active" href="#sekce1">Správa obsahu</a>
    <a class="text-sm-center nav-link" href="#sekce2">Moderátoři</a>
    <a class="text-sm-center nav-link" href="#sekce3">Statistiky</a>
    <a class="text-sm-center nav-link" href="#sekce4">Autoři</a>
  </nav>
    </article>


  <article class="sekce" id="sekce1">
    <h1 class="heading"><kbd>Správa obsahu</kbd></h1>
    <p class="popis my-3 border py-3 px-3 rounded">Zde můžete spravovat články na vaší stránce!</p>

    <form action="imports/contentadd.php" method="post">
  <div class="form-group">
    <label for="inputNadpis">Nadpis</label>
    <input name="nadpis" type="text" class="form-control" id="inputNadpis" aria-describedby="Nadpis" placeholder="Nadpis vašeho článku">
  </div>
  <div class="form-group">
    <label for="inputAutor">Autor</label>
    <input name="autor" type="text" class="form-control" id="inputAutor" placeholder="Autor článku">
  </div>
  <div class="form-group">
    <label for="textArea">Text článku</label>
    <textarea name="textarea" id="textArea" rows="8" cols="80" class="form-control" placeholder="Dnes jsme šli do lesa.."></textarea>
  </div>
<form action="upload.php" method="post">
  <div class="form-group">
      <label for="fileInput">Obrázky</label>
      <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
      </div>
      <button type="submit" class="btn btn-primary" name="image-submit">Upload</button>
    </div>
</form>

</div>
  <button type="submit" class="btn btn-primary" name="content-submit">Přidat článek</button>

</form>
  </article>

  <article class="sekce" id="sekce2">
    <h1 class="heading"><kbd>Moderátoři</kbd></h1>
    <p class="popis my-3 border py-3 px-3 rounded">Výpis všech moderátorů vaší stránky. Tito moderátoři se mohou připojit do systému pro správu obsahu.</p>

    <div class="">
      <table class="table table-striped table-dark">
        <tr>
          <?php
          require 'imports/vypisAdminu.php';
           ?>
        </tr>
      </table>
    </div>


    <form class="add-admin" action="imports/zapisAdminu.php" method="post">
      <div class="form-group">
        <label for="inputJmeno">Jméno</label>
        <input type="text" name="username" class="form-control" value="" placeholder="Jméno">
      </div>
      <div class="form-group">
        <label for="inputHeslo">Heslo</label>
        <input type="text" name="password" class="form-control" value="" placeholder="Heslo">
      </div>
      <div class="form-group">
        <label for="inputKomentar">Poznámka</label>
        <textarea name="comment" class="form-control" rows="3" cols="80"  value="" placeholder="Komentář.."></textarea>
      </div>
      <button class="btn btn-primary" type="submit" name="admin-submit">Přidat moderátora!</button>
    </form>
  </article>

  <article class="sekce" id="sekce3">
    <h1 class="heading"><kbd>Statistiky</kbd></h1>
    <p class="popis my-3 border py-3 px-3 rounded">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </article>

  <article class="sekce" id="sekce4">
    <h1 class="heading"><kbd>Autoři</kbd></h1>
    <p class="popis my-3 border py-3 px-3 rounded">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </article>

  </body>
</html>
