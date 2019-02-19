  <nav class="navbar navbar-expand-md bg-dark navbar-dark ml-auto" id="navigator">
      <div class="container-fluid">
        <a class="navbar-brand my-1" href="index.php"><img src="public/images/DomaSoftware.svg" alt="Logo" width="160" height="30"></a>
        <button type="button" class="btn btn-dark my-1" name="menuOpener" onclick="openNav()"><img src="https://img.icons8.com/material/30/000000/squared-menu.png"></button>
        <section class="" id="MyTogglerNav">
            <div class="btn-group dropup">
            <button type="button" class="btn btn-dark my-1 dropdown-toggle" data-toggle="dropdown" name="accToggle" aria-haspopup="true" aria-expanded="false"><?php $usr = $_SESSION['userUId']; echo "Howdy, $usr" . "<img class='mx-3' src='https://img.icons8.com/material/30/000000/user-male-circle.png'>"; ?></button>
            <span class="caret"></span>
            <div class="dropdown-menu">
                <a href="ucet.php">Účet</a>
                <hr>
                  <form action="imports/logout.php" method="post">
                    <button type="submit" class="log-out form-control btn btn-primary my-1" name="logout-submit" >Log-out</button>
                  </form>


            </div>
          </div>

        </section>
      </div>
    </nav>
