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
	
	<!-- Modernizr -->
	<script src="js/modernizr.js"></script>

</head>

<body>
	
	<div id="page">
	
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="index.php"><img src="img/logo_NaN.png" width="250" height="70" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
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
				<li><span><a href="index-2.php">Accueil</a></span>
				</li>
                <li><span><a href="courses-list.php">Nos Cours</a></span>
				</li>
				<li><span><a href="#0">Pages</a></span>
					<ul>
						<li><a href="about.php">A propos</a></li>
						<li><a href="contacts.php">Contacts</a></li>
						<li><a href="agenda-calendar.php">Mon agenrda</a></li>
					</ul>
				</li>
				<li><span><a href="ace/ace-builds/editor.html">Gamming</a></span>
				</li>
			</ul>
		</nav>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Recherchez ici..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->
	
	<main>
		<section class="header-video">
			<div id="hero_video">
				<div>
					<h3><strong>Les meilleurs cours</strong><br>SUR N<span style="text-transform:lowercase;">a</span>N VIRTUAL STUDY</h3>
					<p>A N<span style="text-transform:lowercase;">a</span>N, l'apprentissage de la programmation informatique devient tout facile et intéractif grâce à son système de cours en ligne.</p>
				</div>
				<a href="#first_section" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
			</div>
			<img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/vid" data-teaser-source="video/vid" data-provider="" data-video-width="1920" data-video-height="960">
		</section>
		<!-- /header-video -->

		<ul id="grid_home" class="clearfix">
			<li>
				<a href="#0" class="img_container">
					<img src="http://via.placeholder.com/600x400/ccc/fff/grid_home_1.jpg" alt="">
					<div class="short_info">
						<h3><strong>N<span style="text-transform:lowercase;">a</span>N</strong>Courses</h3>
						<div><span class="btn_1 rounded">Savoir plus</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="http://via.placeholder.com/600x400/ccc/fff/grid_home_1.jpg" alt="">
					<div class="short_info">
						<h3><strong>Communauté</strong>Nos étudiants</h3>
						<div><span class="btn_1 rounded">Savoir plus</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="http://via.placeholder.com/600x400/ccc/fff/grid_home_1.jpg" alt="">
					<div class="short_info">
						<h3><strong>Test</strong>d'Admission</h3>
						<div><span class="btn_1 rounded">Passez le test</span></div>
					</div>
				</a>
			</li>
		</ul>
		<!--/grid_home -->

		<!-- /container -->

		<div class="container margin_30_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Nos catégories de cours</h2>
				<p>Les differents cours présents sur notre plateforme 2.0 sont rangés par catégorie.</p>
			</div>
			<div class="row">
			<?php

                try{
                  $bdd = new PDO('mysql:host=localhost;dbname=nansite;charset=utf8','root','');
                }
                catch(Exception $e){
                  //en cas d'erreur
                  die('Erreur : ' . $e->getMessage());
                }

                $reponse = $bdd->query('SELECT * FROM categories');
                while ($donnees = $reponse->fetch()) {
                  
          ?>
				<div class="col-lg-8 col-md-8 wow centrer" data-wow-offset="150">
					<a href="codefight.php" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="img/images/reeseaux.jpg" width="310" height="533" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i><?php echo $donnees['programmes']; ?> Programmes</small>
								<h3><?php echo $donnees['titre']; ?></h3>
							</div>
						</figure>
					</a>
				</div>
				<?php
				}
				$reponse->closeCursor(); // Termine le traitement de la requête
				?>
			</div>
			<!-- /row -->
            <!-- /carousel -->
			<div class="container">
				<p class="btn_home_align"><a href="courses-grid.php" class="btn_1 rounded">Toutes les catégories</a></p>
			</div>
			<!-- /container -->
		</div>
		<!-- /container -->

		<!-- /bg_color_1 -->

		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>Enjoy a great students community</h3>
							<p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
							<a href="#0" class="btn_1 rounded">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->
	
	<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logo_NaN.png" width="200" height="100" data-retina="true" alt=""></p>
					<p>NaN est une école de programmation informatique, atypique et open source. Elle met l'accent sur le savoir faire de ses étudiants et ne promet aucun diplôme ni certificat en fin de formations. Programmer, NaaaaN cest pas sorcier.</p>
					<div class="follow_us">
						<ul>
							<li>Suivez-nous sur</li>
							<li><a href="https://www.facebook.com/NotaNumber"><i class="ti-facebook"></i></a></li>
							<li><a href="mailto:nan@info.com"><i class="ti-google"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Liens utiles</h5>
					<ul class="links">
						<li><a href="about.php">About</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
						<li><a href="contacts.php">Contacts</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Nos coordonnées</h5>
					<ul class="contacts">
						<li><a href="tel://22509483463"><i class="ti-mobile"></i> +225 09483463</a></li>
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
						<li><a href="#0">&copy; Copyright - Tous droits réservés - NaN 2018</a></li>
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
	<script src="js/video_header.js"></script>
	<script>
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>

</body>
</html>