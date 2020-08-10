<?php
include 'header_fr.php';
myheader("Infos", '<link rel="stylesheet" type="text/css" href="styles/news.css">','<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">');
?>

		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Infos</div>
							<div class="home_breadcrumbs">
								<ul>
									<li><a href="index_fr_fr.php">Accueil</a></li>
									<li>Infos</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Post -->
				<div class="col-lg-4 news_col">
					<div class="news_post">
						<div class="news_image"><img src="images/news_post_8.jpg" alt=""></div>
						<div class="news_date d-flex flex-column align-items-center justify-content-center">
							<div class="news_day">10</div>
							<div class="news_month">fév</div>
							<div class="news_year">2019</div>
						</div>
						<div class="news_content">
							<div class="news_title">Mise en place d'un nouveau bureau exécutif</div>
							<div class="news_text">
								<p>Vendredi 17 mai 2019, s'est tenu une réunion présidée par Cédric NGUENDAP, directeur adjoint de Yaba-In pour la mise en place d'un nouveau bureau exécutif.</p>
							</div>
						</div>
						<div class="news_button"><a href="404_fr.php">Lire plus</a></div>
					</div>
				</div>

				<!-- News Post -->
				<div class="col-lg-8 news_col">
					<div class="news_post">
						<div class="news_image"><img src="images/news_post_9.jpg" alt=""></div>
						<div class="news_date d-flex flex-column align-items-center justify-content-center">
							<div class="news_day">22</div>
							<div class="news_month">Avr</div>
							<div class="news_year">2018</div>
						</div>
						<div class="news_content">
							<div class="news_title">Résultats finaux du hackathon AR / VR Africa par <a target="_blank" href="http://www.sdkgames.com/">SDK Games Africa</a>.</div>
							<div class="news_text">
								<p>Troisième place de ce concours de Réalité Virtuelle / Réalité Augmentée qui a réuni des équipes de différentes régions du Cameroun.</p>
							</div>
						</div>
						<div class="news_button"><a target="_blank" href="https://www.facebook.com/SDKGames/videos/1786688768307549/">Lire plus</a></div>
					</div>
				</div>


			</div>

			<div class="row">
				<div class="col">
					<div class="page_nums">
						<ul>
							<li><a href="news_fr.php">01</a></li>
							<li class="active"><a href="#">02</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
include 'footer_fr.php';
footer("");
?>