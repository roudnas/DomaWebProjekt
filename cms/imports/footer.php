  <div class="sideAutorNav bg-dark" id="sideAutor">
    <a href="javascript:void(0)" class="closebtny" onclick="closeAutor()">&times;</a>
      <a href="ucet.php">Účet</a>
    <hr style="background-color:gray;">
      <button style="width:100%;" class="btn btn-secondary btn-sm log-out my-1" name="logout-submit"><a class="logA" href="imports/logout.php">Log-out</a></button>
  </div>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark ml-auto" id="navigator">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="public/images/DomaSoftware.svg" alt="Logo" width="100" height="30"></a>
        <button type="button" class="btn btn-dark my-1" name="menuOpener" onclick="openNav()"><img src="https://img.icons8.com/material/30/000000/squared-menu.png"></button>
                <div class="btn-group">
                <button type="button" class="btn btn-dark my-1" style="color:gray;" onclick="openAutor()"><?php echo "<img class='mx-3' src='https://img.icons8.com/material/30/000000/user-male-circle.png'>"; ?></button>
              </div>
      </div>
    </nav>
