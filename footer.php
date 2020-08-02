<?php
function footer($jScript){

?>
	<!-- CTA -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col-lg-3"><?php
				include "./new/suggestions.php";
				?>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_col">
					<div class="footer_about">
						<div class="logo_container footer_logo">
							<div class="logo">
								<a href="#">
									<div class="logo_line_1">Yaba-<span>In</span></div>
									<div class="logo_line_2">Already running</div>
									<div class="logo_img"><img src="images/logo_2.png" alt=""></div>
								</a>
							</div>
						</div>
						<p class="footer_about_text">Let's build the future of tomorrow, starting today.</p>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">Useful Links</div>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="news.php">News</a></li>
							<li><a href="tech.php">Tech</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a href="about.php">About us</a></li>
							<li><a href="404.php">Contact</a></li>
							<li><a href="">...........</a></li>
							<li><a href="">...........</a></li>
							<li><a href="404.php">Analysis and design</a></li>
							<li><a href="404.php">Web solutions</a></li>
							<li><a href="404.php">Descktop solutions</a></li>
							<li><a href="404.php">Mobile app</a></li>
							<li><a href="404.php">ERP solmutions</a></li>
							<li><a href="404.php">AR / VR</a></li>
							<li><a href="404.php">Software maintenance</a></li>
						</ul>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-6 footer_col">
					<div class="footer_newsletter">
						<div class="footer_title">Subscribe to our newsletter</div>
						<form action="#" class="footer_newsletter_form">
							<input type="email" class="footer_newsletter_input" placeholder="Your E-mail" required="required">
							<button class="footer_newsletter_button" type="submit">subscribe</button>
						</form>
						<div class="footer_newsletter_text">Be informed in real time of new innovation initiatives.</div>
						<div class="footer_social">
							<ul>
								<li><a target="_blank" href="https://www.facebook.com/YabaInnovation"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.github.com"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-4 order-md-1 order-2">
						<div class="copyright_content d-flex flex-row align-items-center justify-content-start">
							<div class="cr">
&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Yaba-In</div>
						</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<?php echo $jScript; ?>
</body>
</html>
<?php
}
?>