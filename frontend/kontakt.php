<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
    <link rel="icon" href="public/images/newLogoJustR.png">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
     crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
     crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
     crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>

    <header class="menu">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark" id="navigator">
        <div class="container-fluid">

          <a class="navbar-brand" href="#Home"><img src="public/images/DomaSoftware.svg" alt="" width="140px" height="35px"></a>
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

    <section class="col-12">
			<form method="post" action="contactform.php">
				<div class="form-group">
					<label for="emailinput">Váš email</label>
					<input name="mail" type="email" class="form-control" id="mail" placeholder="vas@email.cz" required>
				</div>
				<div class="form-group">
					<label for="emailinput">Předmět</label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder="Dotaz" required>
				</div>
				<div class="form-group">
					<label for="emailinput">Jméno</label>
					<input name="name" type="text" class="form-control" id="name" placeholder="Jan" required>
				</div>
				<div class="form-group">
					<label for="emailinput">Přijmení</label>
					<input name="surname" type="text" class="form-control" id="surname" placeholder="Okatý" required>
				</div>
				<div class="form-group">
					<label for="textarea">Text</label>
					<textarea name="zprava" id="zprava" class="form-control" id="textarea" rows="10" placeholder="Dobrý den, zaujala mě vaše nabídka, chci vědět více..."
					 required></textarea>
				</div>
				<div class="g-recaptcha" data-sitekey="6Le6S4EUAAAAAMvKqGRrDuXAjeb7f41sJ-KC3FvD" style="margin:0 auto;"></div>
				<button type="submit" class="btn btn-primary">Submit</button>

			</form>
		</section>

  </body>
</html>