<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="NaN est une école de programmation informatique gratuite, atypique et open source.">
    <meta name="author" content="Genesis_NaN">
    <title>NaN | La plateforme d'étude 2.0</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="index.php"><img src="img/logo_NaN.png" width="250" height="70" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
			<li><a href="login.php" class="login">Login</a></li>
			<li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
			<li class="hidden_tablet"><a href="register.php" class="btn_1 rounded">Inscription</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="index-2.php">Accueil</a></span></li>
				<li><span><a href="courses-list.php">Nos Cours</a></span></li>
				<li><span><a href="#0">Pages</a></span>
					<ul>
						<li><a href="about.php">A propos</a></li>
						<li><a href="contacts.php">Contacts</a></li>
						<li><a href="agenda-calendar.php">Mon agenda</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Recherchez-ici..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="contacts">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Contact NaN</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Addresse</h4>
						<span>Cocody angré non loin du nouveau CHU<br>Abidjan - Côte d'ivoire.</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4> addresse Email</h4>
						<span>nan@info.com <br><small></small></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Contacts info</h4>
						<span>+225 85292925<br><small></small></span>
					</li>
				</ul>
			</div>
		</div>
		<!--/contact_info-->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="map_contact">
						</div>
						<!-- /map -->
					</div>
					<div class="col-lg-6">
						<h4>Envoyez un message</h4>
						<p>Remplissez le formulaire ci-dessous avec les informations requises.</p>
						<div id="message-contact"></div>
						<form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name_contact">
										<label class="input_label">
											<span class="input__label-content">Votre nom</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="lastname_contact" name="lastname_contact">
										<label class="input_label">
											<span class="input__label-content">Votre prenom</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="email" id="email_contact" name="email_contact">
										<label class="input_label">
											<span class="input__label-content">Votre email</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="phone_contact" name="phone_contact">
										<label class="input_label">
											<span class="input__label-content">Your telephone</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<span class="input">
									<textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content">Votre message</span>
									</label>
							</span>
							<span class="input">
									<input class="input_field" type="text" id="verify_contact" name="verify_contact">
									<label class="input_label">
									<span class="input__label-content">Etes vous vraiment un humain ? 3 + 1 =</span>
									</label>
							</span>
							<p class="add_top_30"><input type="submit" value="Envoyer" class="btn_1 rounded" id="submit-contact"></p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	
	<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logo_NaN.png" width="200" height="100" data-retina="true" alt=""></p>
					<p>NaN est une école de programmation informatique, atypique et open source. Elle met l'accent sur le savoir faire de ses étudiants et ne promet aucun diplôme ni certificat en fin de formations. Programmer, NaaaaN cest pas sorcier.</p>
					<div class="follow_us">
						<ul>
							<li>Suivez-nous</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Liens utiles</h5>
					<ul class="links">
						<li><a href="about.php">A propos</a></li>
						<li><a href="login.php">Connexion</a></li>
						<li><a href="register.php">Inscription</a></li>
						<li><a href="contacts.php">Contacts</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Nos coordonnées</h5>
					<ul class="contacts">
						<li><a href="tel://22589252529"><i class="ti-mobile"></i> + 22589252529</a></li>
						<li><a href="mailto:nan@info.com"><i class="ti-email"></i> nan@info.com</a></li>
					</ul>
					<div id="newsletter">
					<h6>Notre Newsletter</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Votre email">
							<input type="submit" value="S'abonner" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Copyright - Tous droits réservés - NaN 2018</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© Genesis_NaN</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript" src="js/mapmarker.jquery.js"></script>
	<script type="text/javascript" src="js/mapmarker_func.jquery.js"></script>
</body>
</html>