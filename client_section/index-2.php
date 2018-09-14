<?php session_start(); ?>
<?php require "head.php";?>

<body>
	
	<div id="page">
	
	<?php require "header.php"; ?>
	<!-- /header -->
	
	<main>
		<section class="header-video">
			<div id="hero_video">
				<div>
					<h3><strong>Les meilleurs cours</strong><br>SUR N<span style="text-transform:lowercase;">a</span>N VIRTUAL STUDY</h3>
					<p>A N<span style="text-transform:lowercase;">a</span>N, l'apprentissage de la programmation informatique devient tout facile et intéractif grâce à son système de cours en ligne.</p>
				</div>
				<a href="#grid_home" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
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
						<h3><strong>Quizz</strong></h3>
						<div><span class="btn_1 rounded">Faire le quizz</span></div>
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
							<h3>Interragissez avec la grande communauté</h3>
							<p>Rejoignez le reseau social NaN pour interagir avec toute la grande communauté.</p>
							<a href="#0" class="btn_1 rounded">Rejoindre maintenant</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->
	
	<?php require "footer.php" ?>

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