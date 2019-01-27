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
        <hr>
        <p class="popis my-3 py-3 px-3">&gt; Zde můžete spravovat články na vaší stránce!</p>

        <div class="seznamClanku">
          <h3>Seznam článků</h3>
          <hr>
          <table class="table table-striped table-dark">
            <tr>
              <?php
              require 'imports/vypisclanku.php';
               ?>
            </tr>
          </table>
          <button class='btn btn-dark mb-2' data-toggle='modal' data-target='#artRemoveModal'>Odstranit článek</button>
        </div>

        <div class="modal fade" id="artRemoveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Opravdu chcete odstranit článek?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="imports/removeart.php" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="selecto">Vyberte ID článku, který chcete odstranit.</label>
          <select class="custom-select" id="selecto" name="idCheck">
            <?php
            include 'imports/vypisartsdoselectu.php';
            ?>
          </select>
        </div>
      </div>
      <div class="modal-footer">

        <button type="submit" name="removeButton" class="btn btn-primary">Odstranit</button>
        </form>
      </div>
    </div>
  </div>
</div>

        <div class="wrapper my-3">
          <form action="imports/contentadd.php" method="post" id="contentForm" class="formContent" enctype="multipart/form-data">
            <h3>Nový článek</h3>
            <hr>
        <div class="form-group col-6">
          <label for="inputNadpis">Nadpis</label>
          <input name="nadpis" type="text" class="form-control" id="inputNadpis" aria-describedby="Nadpis" placeholder="Nadpis vašeho článku">
        </div>
        <div class="form-group col-10">
          <label for="textArea">Text článku</label>
          <textarea name="textarea" id="textArea" rows="8" cols="80" class="form-control" placeholder="Dnes jsme šli do lesa.."></textarea>
        </div>

        <button type="button" class="btn mx-3" onclick='onc()' id="imupButton">Přidat fotky (max 2.5 MB)</button>

        <div class="custom-file py-3 my-3" id="fileDiv">

        </div>

          <button type="submit" class="btn btn-dark mx-3" name="content-submit" form="contentForm">Přidat článek</button>
        </form>

        </div>

  </article>

      <script>
      function onc() {
        let div = document.getElementById('fileDiv');
        let css = window.getComputedStyle(div).getPropertyValue("display");
        if (css == "none") {
          div.style.display = "block";
          div.innerHTML = "<input class='custom-file-input col-10 mx-3' id='inputFile' type='file' name='userfile[]' multiple='multiple'><label class='custom-file-label col-10 mx-3' for='inputFile'>Choose file</label>";
        } else {
          div.style.display = "none";
          div.innerHTML = "";
        }

      }
      </script>
  </body>
</html>
