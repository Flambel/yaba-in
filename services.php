<?php
include 'header.php';
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
									<li><a href="index.php">Home</a></li>
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
						<div class="section_subtitle">take a look at our</div>
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
						<div class="service_title">ANALYSIS AND DESIGN</div>
						<div class="service_text">
							<p>We focus on investigating the problem to be solved. We also focus on a conceptual software solution that meets your requirements through the description of models, database schemas and software objects.</p>
						</div>
						<div class="service_link"><a href="404.php">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">WEB SOLUTIONS</div>
						<div class="service_text">
							<p>We have a web design, backend, frontend and fullstack developer team with several achievements to their credit, for a better quality service.</p>
						</div>
						<div class="service_link"><a href="404.php">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">DESKTOP SOLUTIONS</div>
						<div class="service_text">
							<p>Content.</p>
						</div>
						<div class="service_link"><a href="404.php">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">MOBILE APP SOLUTIONS</div>
						<div class="service_text">
							<p>Content.</p>
						</div>
						<div class="service_link"><a href="404.php">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">ERP SOLUTIONS</div>
						<div class="service_text">
							<p>Content.</p>
						</div>
						<div class="service_link"><a href="404.php">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_title">SOFTWARE SOLUTIONS</div>
						<div class="service_text">
							<p>Content.</p>
						</div>
						<div class="service_link"><a href="404.php">Read More</a></div>
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
							<div class="section_title">Contact us immediately</div>
						</div>
						<div class="call_form_container">
							<form action="#" class="call_form">
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
											<option>Customer type</option>
											<option>Business type</option>
											<option>Other type</option>
										</select>
									</div>
									<div class="col-md-12">
										<button id="call_btn" type="submit" class="call_button trans_200" value="Submit">submit</button>
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
include 'footer.php';
footer('
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="js/about_custom.js"></script>');
?>
