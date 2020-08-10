<?php
include 'header.php';
myheader("News", '<link rel="stylesheet" type="text/css" href="styles/news.css">','<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">');
?>

		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">The News</div>
							<div class="home_breadcrumbs">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>News</li>
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
							<div class="news_month">feb</div>
							<div class="news_day">10</div>
							<div class="news_year">2019</div>
						</div>
						<div class="news_content">
							<div class="news_title">Establishment of a new executive office</div>
							<div class="news_text">
								<p>Friday, May 17, 2019, there was a meeting chaired by Cédric NGUENDAP, deputy director of Yaba-In for the establishment of a new executive office.</p>
							</div>
						</div>
						<div class="news_button"><a href="404.php">read more</a></div>
					</div>
				</div>

				<!-- News Post -->
				<div class="col-lg-8 news_col">
					<div class="news_post">
						<div class="news_image"><img src="images/news_post_9.jpg" alt=""></div>
						<div class="news_date d-flex flex-column align-items-center justify-content-center">
							<div class="news_month">APR</div>
							<div class="news_day">22</div>
							<div class="news_year">2018</div>
						</div>
						<div class="news_content">
							<div class="news_title">AR / VR Africa Hackathon final results by <a target="_blank" href="http://www.sdkgames.com/">SDK Games Africa</a>.</div>
							<div class="news_text">
								<p>Third place in this Virtual Reality / Augmented Reality competition which brought together teams from different regions of Cameroon.</p>
							</div>
						</div>
						<div class="news_button"><a target="_blank" href="https://www.facebook.com/SDKGames/videos/1786688768307549/">read more</a></div>
					</div>
				</div>


			</div>

			<div class="row">
				<div class="col">
					<div class="page_nums">
						<ul>
							<li><a href="news.php">01</a></li>
							<li class="active"><a href="#">02</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
include 'footer.php';
footer("");
?>