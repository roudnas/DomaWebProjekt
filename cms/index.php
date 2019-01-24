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
    <title>Doma CMS System</title>
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
    <nav class="navbar navbar-expand-md bg-dark navbar-dark" id="navigator">
			<div class="container-fluid">

				<a class="navbar-brand" href="index.php"><img src="public/images/DomaSoftware.svg" alt="" width="140px" height="35px"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#MyTogglerNav" aria-controls="#MyTogglerNav"
				 aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>

				<section class="collapse navbar-collapse" id="MyTogglerNav">
					<div class="navbar-nav ml-auto">
						<a class="nav-item nav-link" href="#a5">Podpora</a>
					</div>
				</section>

			</div>
		</nav>
    <script src="public/js/navbarheightfix.js" type="text/javascript"></script>

    <article class="menu">
      <nav class="sidenav nav nav-tabs flex-column flex-sm-colum" id="sidenav">
    <a class="sidenav-link text-sm-center nav-link active" href="index.php"><img class="my-2 mx-2" src="https://img.icons8.com/material/24/000000/document.png">Správa obsahu</a>
    <a class="sidenav-link text-sm-center nav-link" href="moderatori.php"><img class="my-2 mx-2" src="https://img.icons8.com/material/24/000000/user-group-man-man.png">Moderátoři</a>
    <a class="sidenav-link text-sm-center nav-link" href="statistiky.php"><img class="my-2 mx-2" src="https://img.icons8.com/material/24/000000/combo-chart.png">Statistiky</a>
    <a class="sidenav-link text-sm-center nav-link" href="autori.php"><img class="my-2 mx-2" src="public/images/us.svg" height="24px" width="24px">Autoři</a>
    <a class="sidenav-link text-sm-center nav-link" href="ucet.php"><img class="my-2 mx-2" src="https://img.icons8.com/material/24/000000/contacts.png">Účet</a>
    <form action="imports/logout.php" method="post">
      <button type="submit" class="form-control btn btn-primary my-3" name="logout-submit" >Log-out</button>
    </form>

  </nav>
    </article>

      <article class="sekce" id="sekce1">
        <h1 class="heading"><img class="my-2 mx-2" src="https://img.icons8.com/material/60/000000/document.png">Správa obsahu</h1>
        <p class="popis my-3 py-3 px-3">&gt; Zde můžete spravovat články na vaší stránce!</p>

        <form action="imports/contentadd.php" method="post" id="contentForm" enctype="multipart/form-data">
      <div class="form-group col-6">
        <label for="inputNadpis">Nadpis</label>
        <input name="nadpis" type="text" class="form-control" id="inputNadpis" aria-describedby="Nadpis" placeholder="Nadpis vašeho článku">
      </div>
      <div class="form-group col-6">
        <label for="inputAutor">Autor</label>
        <input name="autor" type="text" class="form-control" id="inputAutor" placeholder="Autor článku">
      </div>
      <div class="form-group col-10">
        <label for="textArea">Text článku</label>
        <textarea name="textarea" id="textArea" rows="8" cols="80" class="form-control" placeholder="Dnes jsme šli do lesa.."></textarea>
      </div>

      <button type="button" class="btn" id="imupButton" onclick="onc()">Přidat fotky</button>

      <div class="custom-file py-3 my-3" id="fileDiv">

      </div>

        <button type="submit" class="btn btn-primary" name="content-submit" form="contentForm">Přidat článek</button>
      </form>

  </article>

      <script>

      function onc() {
        let div = document.getElementById('fileDiv');
        let css = window.getComputedStyle(div).getPropertyValue("display");
        if (css == "none") {
          div.style.display = "block";
          div.innerHTML = "<input class='custom-file-input col-10' id='inputFile' type='file' name='userfile[]' value='' multiple=''><label class='custom-file-label col-10' for='inputFile'>Choose file</label>";
        } else {
          div.style.display = "none";
          div.innerHTML = "";
        }

      }
      </script>
  </body>
</html>
