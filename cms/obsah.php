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
  </head>

  <body>
    <script type="text/javascript">
    jQuery(function ($) {
        $("#textArea").shieldEditor({
            height: 460
        });
    });
</script>
    <?php
    require 'imports/statushandler.php';
    ?>

      <?php require 'imports/commonmenu.php'; ?>

      <article class="sekce mt-3" id="sekce1">
        <h1 class="heading"><img class="my-2 mx-2" src="https://img.icons8.com/material/60/000000/document.png">Správa obsahu</h1>
        <hr>
        <p class="popis my-3 py-3 px-3">&gt; Zde můžete spravovat články na vaší stránce!</p>

        <div class="card seznamClanku">
          <h3><img class="mx-3" src="https://img.icons8.com/material-outlined/48/000000/overview-pages-3.png">Seznam článků</h3>
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

        <div class="card wrapper my-3" style="border-radius:10px;">
          <form action="imports/contentadd.php" method="post" id="contentForm" class="formContent" enctype="multipart/form-data">
            <h3><img class="mx-3" src="https://img.icons8.com/material-outlined/48/000000/edit-file.png">Nový článek</h3>
            <hr>
        <div class="form-group col-8">
          <label for="inputNadpis">Nadpis</label>
          <input name="nadpis" type="text" class="form-control" id="inputNadpis" aria-describedby="Nadpis" placeholder="Nadpis vašeho článku">
        </div>
        <div class="form-group col-12">
          <label for="textArea">Text článku</label>
          <textarea name="textarea" id="textArea"></textarea>
        </div>
        <button type="button" class="btn mx-3" onclick='onc()' id="imupButton">Přidat fotky (max 2.5 MB)</button>
        <div class="custom-file py-3 my-3" id="fileDiv">
        </div>
          <button type="submit" class="btn btn-dark mx-3" name="content-submit" form="contentForm">Přidat článek</button>
        </form>
        </div>


        <div class="footer mt-5 p-5 text-center" style="border:1px solid rgba(0,0,0,.1);">
          <p>&copy; Doma Software 2019</p>
        </div>
  </article>
  <?php require 'imports/footer.php' ?>

  <script>
  function openNav() {
    document.getElementById('popNav').style.height = "100%";
  }
  function closeNav() {
    document.getElementById('popNav').style.height = "0%";
  }

  function openAutor() {
    document.getElementById('sideAutor').style.width = "250px";
  }
  function closeAutor() {
    document.getElementById('sideAutor').style.width = "0px";
  }
  
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
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    })
  </script>
  </body>
</html>
