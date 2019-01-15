<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Front-End Developer Dominik Roudný">
	<meta name="author" content="Dominik Roudný">
	<meta name="keywords" content="Webové stránky, Web, Tvorba WWW, HTML, CSS, Javascript, Bootstrap, Dominik Roudný">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Roudnas</title>

	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="css/atom.css">
	<link rel="icon" href="images/newLogoJustR.png">




	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>
	<script src="js/pace.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

	<!..Hlavicka...>
	<header id="Home" class="heady">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="navigator">
			<div class="container-fluid">

				<a class="navbar-brand" href="#Home"><img src="images/newLogoSmallGray.svg" alt="" width="110px" height="60px"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#MyTogglerNav" aria-controls="#MyTogglerNav"
				 aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>

				<section class="collapse navbar-collapse" id="MyTogglerNav">
					<div class="navbar-nav">
						<a class="nav-item nav-link" href="#Home">Domů</a>
						<a class="nav-item nav-link" href="#a2">Technologie</a>
						<a class="nav-item nav-link" href="#a3">O mně</a>
						<a class="nav-item nav-link" href="#a4">Reference</a>
						<a class="nav-item nav-link" href="#a5">Kontakt</a>
					</div>
				</section>

			</div>
		</nav>

		<section class="Obsahstr0 d-flex align-items-center text-light text-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-11 col-sm-10 col-md-8">
						<strong id="nadpis1">Dominik Roudný <br> Your Casual Front-End Developer</strong>
					</div>
				</div>
			</div>
		</section>
	</header>

	<!..Hlavni obsah...>
	<article class="pageSekce text-center py-5" id="a2">
		<header class="headerSekce container">
			<div class="row justify-content-center">
				<div class="col-11 col-sm-10 col-md-8">
					<p class="nadpisSekci" id="nadpis1">Technologie</p>
					<p id="line"></p>
					<p class="obsahSekci" id="obsah1">K front-endu využívám <strong class="strongText">HTML5</strong>, <strong class="strongText">CSS3</strong>,
						<strong class="strongText">JavaScript</strong> a <strong class="strongText">Bootstrap</strong>. Když jde do
						tuhého, tak na serverovou práci použiji <strong class="strongText">PHP7.</strong></p>
				</div>
			</div>
		</header>

		<section class="layout-multicolumn container">

			<div class="row justify-content-center">
				<section class="col-10 col-md-6 col-lg-3 col-xl-3 py-2">
					<div class="card" style="width: 16rem;height:30rem;margin:0 auto;">
						<img class="card-img-top py-3" src="images/MonitorHtmlNew.svg" alt="Card image cap" width="250" height="250">
						<div class="card-body">
							<h5 class="card-title">HTML5</h5>
							<p class="card-text">Základní stavební kámen webové stránky. Už od roku 1990 by to bez něho asi opravdu
								nešlo..</p>
							<a href="https://developer.mozilla.org/cs/docs/cs_HTML/HTML5" class="btn btn-secondary">Dokumentace</a>
						</div>
					</div>
				</section>

				<section class="col-10 col-md-6 col-lg-3 col-xl-3 py-2">
					<div class="card" style="width: 16rem;height:30rem;margin:0 auto;">
						<img class="card-img-top py-3" src="images/MonitorCssNew.svg" alt="Card image cap" width="250" height="250">
						<div class="card-body">
							<h5 class="card-title">CSS3</h5>
							<p class="card-text">Bez kaskádových stylů by dnes webové stránky nevypadaly tak jak vypadají.</p>
							<a href="https://developer.mozilla.org/en-US/docs/Web/CSS" class="btn btn-secondary">Dokumentace</a>
						</div>
					</div>
				</section>
				<section class="col-10 col-md-6 col-lg-3 col-xl-3 py-2">
					<div class="card" style="width: 16rem; height:30rem;margin:0 auto;">
						<img class="card-img-top py-3" src="images/MonitorJSNew.svg" alt="Card image cap" width="250" height="250">
						<div class="card-body">
							<h5 class="card-title">Javascript</h5>
							<p class="card-text">Javascript, neboli potomek TypeScriptu je hlavní scriptovací jazyk pro webové stránky.</p>
							<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" class="btn btn-secondary">Dokumentace</a>
						</div>
					</div>
				</section>
				<section class="col-10 col-md-6 col-lg-3 col-xl-3 py-2">
					<div class="card" style="width: 16rem;height:30rem;margin:0 auto;">
						<img class="card-img-top py-3" src="images/MonitorBTNew.svg" alt="Card image cap" width="250" height="250">
						<div class="card-body">
							<h5 class="card-title">Bootstrap</h5>
							<p class="card-text">Bootstrap je skvělý framework, který usnadňuje tvorbu webových stránek.</p>
							<a href="https://getbootstrap.com" class="btn btn-secondary">Dokumentace</a>
						</div>
					</div>
				</section>
			</div>

		</section>
	</article>

	<article id="a3" class="pageSekce py-3">
		<header class="text-center container">
			<div class="row justify-content-center">
				<div class="col-11 col-sm-10 col-md-8">
					<p class="nadpisSekci" id="nadpis1">O mně</p>
					<p id="line"></p>
					<p class="obsahSekci" id="obsah1">Jmenuji se Dominik Roudný. Studuji <strong class="strongText">Programování</strong>
						a <strong class="strongText">Hardware</strong> na střední škole.
						Nebojím se ale také designu, kde se snažím preferovat typ <strong class="strongText">Flat Design</strong>.</p>
				</div>
			</div>
		</header>

		<section class="layout-media container my-5">
			<div class="row justify-content-center">
				<img class="mediaImg" src="images/R.svg" alt="Logo" height="250" width="250">
				<div class="col-lg-9">
					<section class="media py-3">
						<div class="media-telo">
							<p class="nadpisSekci" id="nadpis2">Vztah k technologiím</p>
							<p class="obsahSekci" id="obsah1">Jsem převážně samouk ve většině svých techologických znalostí. Co se týče
								webových stránek, tam jsem začal už ve věku 13 let základním <strong class="strongText">HTML</strong> a <strong
								 class="strongText">CSS</strong>.
								Mezi svůj repertoár řadím ale také ne-webové jazyky a technologie jako je <strong class="strongText">Java</strong>,
								<strong class="strongText">C# (Unity)</strong>, <strong class="strongText">MySQL</strong>, nebo znalost <strong
								 class="strongText">Počítačových sítí</strong>
								a <strong class="strongText">Hardwaru</strong>.
								Mezi grafickými programy si nejvíce rozumím s <strong class="strongText">Adobe Photoshop</strong>, <strong
								 class="strongText">Adobe Illustrator</strong> a <strong class="strongText">Adobe InDesign</strong>.</p>
						</div>
					</section>
				</div>
			</div>
		</section>
	</article>

	<article id="a4" class="pageSekce Reference text-center py-5">

		<header class="headerSekce container">
			<div class="row justify-content-center">
				<div class="col-11 col-sm-10 col-md-8">
					<p class="nadpisSekci" id="nadpis1">Reference</p>
					<p id="line"></p>
					<p class="obsahSekci" id="obsah1">Ukázka mých minulých prací.</p>
				</div>
			</div>
		</header>

		<section id="layout-carousel" class="pageCarousel carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#layout-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#layout-carousel" data-slide-to="1"></li>
				<li data-target="#layout-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<section class="carousel-item active">
					<a href="https://roudnas.tk"><img class="img-fluid d-block" src="images/phs1.png" alt="Carousel 1"></a>
				</section>
				<section class="carousel-item">
					<img class="img-fluid d-block" src="images/phs2.png" alt="Carousel 2">
				</section>
				<section class="carousel-item">
					<img class="img-fluid d-block" src="images/phs3.png" alt="Carousel 3">
				</section>

				<a href="#layout-carousel" class="carousel-control-prev" role="button" data-slide="prev">
					<span><img src="https://img.icons8.com/material-sharp/24/000000/circled-chevron-left.png"></span>
					<span class="sr-only">Previous</span>
					</span>
				</a>
				<a href="#layout-carousel" class="carousel-control-next" role="button" data-slide="next">
					<span><img src="https://img.icons8.com/material-sharp/24/000000/circled-chevron-right.png"></span> <span class="sr-only">Next</span>
					<span class="sr-only">Next</span>
				</a>

			</div>

		</section>

	</article>

	<article id="a5" class="pageSekce Kontakt text-center py-5">
		<header class="text-center container">
			<div class="row justify-content-center">
				<div class="col-10 col-sm-10 col-md-8">
					<p class="nadpisSekci" id="nadpis1">Kontakt</p>
					<p id="line"></p>
					<p class="obsahSekci" id="obsah1">Zde mě můžete kontaktovat a zeptat se mě na cokoliv. Stačí vložit váš <strong
						 class="strongText">email</strong> a <strong class="strongText">text</strong> zprávy, kterou mi chcete poslat!</p>
				</div>
			</div>
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

	</article>



	<!..Paticka...>
	<footer class="Footy bg-dark py-5">
	<section class="layout-social text-center">
	<p id="obsah1"> ©️ Dominik Roudný 2018. All rights reserved. </p> <br>
	<p id="obsah1" style="color:gray;"> Big thanks to <a href="https://svgbackgrounds.com">svgbackgrounds.com</a> for the cool background!</p>
	</section>

	</footer>

</body>

</html>
