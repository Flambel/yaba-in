<?php
include 'header_fr.php';
myheader("Services", '<link rel="stylesheet" type="text/css" href="styles/services.css">','<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">');
?>
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/services_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Services</div>
							<div class="home_breadcrumbs">
								<ul>
									<li><a href="index_fr.php">Accueil</a></li>
									<li>Services</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="points">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle">Nos</div>
						<div class="section_title">SERVICES</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="services_background parallax-window" data-parallax="scroll" data-image-src="images/services_background_2.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-row flex-wrap align-items-start justify-content-start">
					<!-- Service -->
					<div class="service">
						<div class="service_title">ANALYSE / CONCEPTION</div>
						<div class="service_text">
							<p>Nous mettons un point d'honneur sur l'étude du problème à résoudre et la solution logicielle conceptuelle qui répond à vos exigences à travers la description de modèles, de schémas de bases de données et d'objets logiciels.</p>
						</div>
						<div class="service_link"><a href="404_fr.php">Lire plus</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">SOLLUTIONS WEB</div>
						<div class="service_text">
							<p>Nous avons une équipe de web design, développeurs backend, frontend et fullstack avec de nombreuses réalisations à leur actif, pour un service de meilleure qualité.<br /><br /><br /></p>
						</div>
						<div class="service_link"><a href="404_fr.php">Lire plus</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">SOLUTIONS DESKTOP</div>
						<div class="service_text">
							<p>Nous avons une grande expérience dans le développement de solutions Windows de bureau. Cependant, nous proposons des solutions basées sur le noyau linux.<br /><br /><br /></p>
						</div>
						<div class="service_link"><a href="404_fr.php">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">APPLICATIONS MOBILE</div>
						<div class="service_text">
							<p>La mobilité est un facteur très important dans le monde numérique. En conséquence, nous réalisons des applications utilisables sur les appareils mobiles pour une expérience plus accessible.<br /><br /><br /></p>
						</div>
						<div class="service_link"><a href="404_fr.php">Lire plus</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">SOLUTIONS PGI</div>
						<div class="service_text">
							<p>Réalisation de modules pour progiciel de gestion intégré Odoo. Installez et configurez vos solutions pour gérer tous les processus de votre entreprise en intégrant toutes ses fonctions.</p>
						</div>
						<div class="service_link"><a href="404_fr.php">Lire plus</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">MAINTENANCE LOGICIEL</div>
						<div class="service_text">
							<p>Maintenance corrective et évolutive, support des problèmes liés aux appareils, mise à niveau des logiciels pour optimiser leurs performances (correction, mise à jour, ajout d'extensions ...) y compris la gestion du réseau.</p>
						</div>
						<div class="service_link"><a href="404_fr.php">Read More</a></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Call Back -->


	<div class="call">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="call_image"><img src="images/call.jpg" alt=""></div>
				</div>
				<div class="col-lg-8">
					<div class="call_container">
						<div class="section_title_container">
							<div class="section_subtitle">.</div>
							<div class="section_title">Contactez nous immédiatement</div>
						</div>
						<div class="call_form_container">
							<form action="#" class="call_form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="input_item" placeholder="Nom" required="required">
									</div>
									<div class="col-md-6">
										<input type="email" class="input_item" placeholder="E-mail" required="required">
									</div>
									<div class="col-md-6">
										<input type="text" class="input_item" placeholder="Téléphone">
									</div>
									<div class="col-md-6">
										<select class="dropdown_item input_item">
											<option>Individuel</option>
											<option>Entreprise</option>
											<option>Autre</option>
										</select>
									</div>
									<div class="col-md-12">
										<button id="call_btn" type="submit" class="call_button trans_200" value="Submit">Soumettre</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
<?php
include 'footer_fr.php';
footer('
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="js/about_custom.js"></script>');
?>
