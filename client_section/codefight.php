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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
	
	<div id="page">
		
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="index-2.php"><img src="img/logo_NaN.png" width="200" height="70" data-retina="true" alt=""></a>
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
				<li><span><a href="#0">Nos cours</a></span>
				</li>
				<li><span><a href="#0">Pages</a></span>
					<ul>
						<li><a href="about.php">About</a></li>
						<li><a href="contacts.php">Contacts</a></li>
						<li><a href="agenda-calendar.php">Mon agenda</a></li>
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
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Cours de <br> Réseaux Informatiques</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_120_95">
			<?php
			try{
				$bdd = new PDO('mysql:host=localhost;dbname=nansite;charset=utf8','root','');
			  }
			  catch(Exception $e){
				//en cas d'erreur
				die('Erreur : ' . $e->getMessage());
			  }
			?>
			<div class="row">
			<?php
			$reponse = $bdd->query('SELECT * FROM programmes');
                while ($donnees = $reponse->fetch()) {
			?>
				<div class="col-lg-8 col-md-8 wow centrer" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="img/images/reeseaux.jpg" width="310" height="533" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i><?php echo $donnees['stage']; ?> stage(s)</small>
								<h3><?php echo $donnees['titre']; ?></h3>
                                <button type="button" class="btn btn-primary" id="v1">Voir les stages</button>
							</div>
						</figure>
					</a>
				</div>
			<?php
				}
				$reponse->closeCursor(); // Termine le traitement de la requête

        	?>
                <!-- /section -->
						
						<section class="lesson" id="lessons">
							<div class="intro_title">
								<h2>Lessons</h2>
								<ul>
									<li>18 lessons</li>
									<li>01:02:10</li>
								</ul>
							</div>
							<div id="accordion_lessons" role="tablist" class="add_bottom_45">
								<div class="card">
									<div class="card-header" role="tab" id="headingOne">
										<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i> Introdocution</a>
										</h5>
									</div>

									<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingTwo">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<i class="indicator ti-plus"></i>Generative Modeling Review
											</a>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingThree">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<i class="indicator ti-plus"></i>Variational Autoencoders
											</a>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->

								<div class="card">
									<div class="card-header" role="tab" id="headingFourth">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
												<i class="indicator ti-plus"></i>Gaussian Mixture Model Review
											</a>
										</h5>
									</div>
									<div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
							</div>
							<!-- /accordion -->
						</section>
						<!-- /section -->
			</div>
			<!--/row-->
		</div>
	</main>
        
	<!--/main-->
	
	<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logo_NaN.png" width="200" height="90" data-retina="true" alt=""></p>
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
						<li><a href="#0">About</a></li>
						<li><a href="#0">Login</a></li>
						<li><a href="#0">Register</a></li>
						<li><a href="#0">Contacts</a></li>
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
	<script>
        $(".lesson").hide();
        $("#v1").click(function(){
            $(".lesson").fadeToggle();
        });
        
        $(".lesson2").hide();
         $("#v2").click(function(){
            $(".lesson2").fadeToggle();
        });
    </script>
</body>
</html>