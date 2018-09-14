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
		
	
	<?php require "header.php"; ?>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Toutes les catégories</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field"></div>
					</li>
					<li>
						<div class="layout_view">
							<a href="#0" class="active"><i class="icon-th"></i></a>
						</div>
					</li>
					<li>
						<select name="orderby" class="selectbox">
							<option value="category">Category</option>
							<option value="category 2">Literature</option>
							<option value="category 3">Architecture</option>
							<option value="category 4">Economy</option>
							</select>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		<div class="container margin_60_35">
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
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.php"><img src="img/images/reeseaux.jpg" class="img-fluid" alt=""></a>
						</figure>
						<div class="wrapper">
							<h3>
								<?php echo $donnees['titre']; ?>
							</h3>
							<p>
								<?php echo $donnees['descr']; ?>
							</p>
						</div>
						<ul>
							<li><!-- <i class="icon_clock_alt"></i> 1h 30min --></li>
							<li><!-- <i class="icon_like"></i> 890 --></li>
							<li><a href="course-detail-2.php">Commencer ici</a></li>
						</ul>
					</div>
				</div>
				<?php
			        }
			        $reponse->closeCursor(); // Termine le traitement de la requête
        		?>
				<!-- /box_grid -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		<div class="bg_color_1">
			
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	
	<?php require "footer.php" ?>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
  
</body>
</html>