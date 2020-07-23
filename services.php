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
									<li><a href="financial.html">Home</a></li>
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
						<div class="service_icon"><img src="images/service_1.svg" class="svg" alt=""></div>
						<div class="service_title">Transport & Logistics Consulting</div>
						<div class="service_text">
							<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
						</div>
						<div class="service_link"><a href="#">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_icon"><img src="images/service_2.svg" class="svg" alt=""></div>
						<div class="service_title">Complete Financial Planning</div>
						<div class="service_text">
							<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
						</div>
						<div class="service_link"><a href="#">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_icon"><img src="images/service_3.svg" class="svg" alt=""></div>
						<div class="service_title">Safe & Secure Transactions</div>
						<div class="service_text">
							<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
						</div>
						<div class="service_link"><a href="#">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_icon"><img src="images/service_4.svg" class="svg" alt=""></div>
						<div class="service_title">Private Internet Banking</div>
						<div class="service_text">
							<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
						</div>
						<div class="service_link"><a href="#">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_icon"><img src="images/service_5.svg" class="svg" alt=""></div>
						<div class="service_title">Best Business Consulting</div>
						<div class="service_text">
							<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
						</div>
						<div class="service_link"><a href="#">Read More</a></div>
					</div>

					<!-- Service -->
					<div class="service">
						<div class="service_icon"><img src="images/service_6.svg" class="svg" alt=""></div>
						<div class="service_title">Consumer Products Consulting</div>
						<div class="service_text">
							<p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
						</div>
						<div class="service_link"><a href="#">Read More</a></div>
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
							<div class="section_subtitle">take a look at our</div>
							<div class="section_title">Request a Call Back</div>
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
											<option>Business type</option>
											<option>Business type</option>
											<option>Business type</option>
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
