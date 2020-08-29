<?php
include 'header.php';
myheader("Contact", '<link rel="stylesheet" type="text/css" href="styles/contact.css">','<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">');
?>

		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/black-iphone-7-on-brown-table-699122.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Contact</div>
							<div class="home_breadcrumbs">
								<ul>
									<li><a href="index.html">Accueil</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact -->
<?php
 /* $dest = "sanoukueflambeljunior@gmail.com";
  $sujet = "Email de test";
  $corp = "Salut ceci est un email de test envoyer par un script PHP";
  $headers = "From: contact@yaba-in.com";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }*/
?>
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="info">
						<div class="section_title_container">
							<div class="section_subtitle"></div>
							<div class="section_title">Info contact</div>
						</div>
						<div class="info_title">Siège social</div>
						<ul>
							<li>Address: Bangangté, Ouest Cameroun </li>
							<li>Tél: +237 691 224 472</li>
							<li>Email: contact@yaba-in.com</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8 contact_form_col">
					<div class="section_title_container">
						<div class="section_subtitle"></div>
						<div class="section_title">Contactez nous</div>
					</div>
					<div class="contact_form_container">
						<form action="#" class="contact_form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="input_item" placeholder="Your Name" required="required">
								</div>
								<div class="col-md-6">
									<input type="email" class="input_item" placeholder="Your E-mail" required="required">
								</div>
								<div class="col-md-6">
									<input type="text" class="input_item" placeholder="Your Phone">
								</div>
								<div class="col-md-6">
									<select class="dropdown_item input_item">
										<option>Service entreprise</option>
										<option>Service individuel</option>
										<option>Autre service</option>
									</select>
								</div>
								<div class="col-md-12">
									<textarea id="contact_message" class="input_item contact_message" name="message" placeholder=" Your Message" required="required" data-error="Please, write us a message."></textarea>
								</div>
								<div class="col-md-12">
									<button id="contact_btn" type="submit" class="contact_button trans_200" value="Submit">Envoyer</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Google Map -->
		
	<div class="map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<?php
				include './new/map.php';
				?>
			</div>
		</div>
		<div class="map_contact">
			<div class="map_contact_inner d-flex flex-column align-items-start justify-content-center">
				<div class="logo_container contact_logo">
					<div class="logo">
						<div class="logo_line_1">Yaba-<span>in</span></div>
						<div class="logo_line_2">Déjà en marche</div>
						<div class="logo_img"><img src="images/logo_2.png" alt=""></div>
					</div>
				</div>
				<div class="map_contact_title">Siège social</div>
				<ul>
					<li>Address: Bangangté, Ouest Cameroon </li>
					<li>Tél: +237 691 224 472</li>
					<li>Email: contact@yaba-in.com</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Footer -->
<?php
include 'footer.php';
footer('<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>');
?>