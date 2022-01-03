<?php
$language="";
function translateFR(){
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	  $url = "https"; 
	else
	  $url = "http"; 
	  
	// Ajoutez // à l'URL.
	$url .= "://"; 
	  
	// Ajoutez l'hôte (nom de domaine, ip) à l'URL.
	$url .= $_SERVER['HTTP_HOST']; 
	$url2 = $url;
	  
	// Ajouter l'emplacement de la ressource demandée à l'URL
	$url .= $_SERVER['REQUEST_URI']; 
		
	// Afficher l'URL
	$extens = substr(substr(strrchr($url, '/'),1),0,-4);
	if(empty($extens)){
		$extens = 'index';
	}
	if (strrchr($extens, '_fr')) {
		echo '';
	}
	else {
		$extens .='_fr.php';
		$url2 = '/'.$extens; 
	return $extens;
	}
}

function myheader($title, $style1, $style2){

	$pageFR = translateFR();
	$page1="hassubs";
	$page2="hassubs";
	$page3="hassubs";
	$page4="hassubs";
	$page5="hassubs";
	$page6="hassubs";
	if($title=="Home"){
		$page1="active hassubs";
	}
	else if($title=="News"){
		$page2="active hassubs";
	}
	else if($title=="Tech"){
		$page3="active hassubs";
	}
	else if($title=="Services"){
		$page4="active hassubs";
	}
	else if($title=="About"){
		$page5="active hassubs";
	}
	else if($title=="Contact"){
		$page6="active hassubs";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Yaba-In | <?php echo $title; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Invest project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="./images/logo.png" />
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/universal.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php echo "$style1 $style2"; ?>
<style>
</style>
</head>
<body>

<div class="super_container">
	
	<!-- Home -->

	<div class="home">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->
			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_container d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container">
									<div class="logo">
										<div class="logo_line_1">Yaba-<span>In</span></div>
										<div class="logo_line_2">Already running.</div>
										<div class="logo_img"><img src="images/logo.png" alt=""></div>
									</div>
								</div>
								<div class="top_bar_content ml-auto">
									<div class="coins main_menu_social">
										<ul>
											<li><a add target="_blank" href="https://www.facebook.com/YabaInnovation"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a add target="_blank" href="https://www.github.com"><i class="fa fa-github" aria-hidden="true"></i></a></li>
											<li><a add target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
											<li><a add target="_blank" href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a add target="_blank" href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<a href="<?php echo $pageFR;?>"><font color="white"> [<img src="images/fr.jpg">] |</font></a>
									<div class="register_login">
										<script>
										function msg() {
										  alert("You cannot access. Please contact the administrator.");
										}
										function myFunction() {
										  var x = document.getElementById("snackbar");
										  x.className = "show";
										  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
										}
										</script>
										<div class="register"><a href="#" onclick="myFunction()">register</a></div>

										<div id="snackbar"><i class="material-icons" style="font-size:20px">warning</i> You cannot access. Please contact the administrator.</div>
										<div class="login"><a href="404.php">login</a></div>
									</div>
								</div>
								<div class="burger">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>

			<!-- Main Menu -->
			<div class="main_menu">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
								<div class="main_menu_content">
									<ul class="main_menu_list">
										<li class="<?php echo $page1; ?>">
											<a href="index.php">HOME
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
												</svg>
											</a>
										</li>
										<li class="<?php echo $page2; ?>">
											<a href="news.php">NEWS
												<svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
												</svg>
											</a>
										</li>
										<li class="<?php echo $page3; ?>">
											<a href="tech.php">TECH
											<svg version="1.1" id="Layer_15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
											</svg>
										</a></li>
										<li class="<?php echo $page4; ?>">
											<a href="services.php">SERVICES
												<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
													<g>
														<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
													</g>
												</svg>
											</a>
											<ul>
												<li><a href="404.php">Analysis and design
													<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
														<g>
															<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
														</g>
													</svg>
												</a></li>
												<li><a href="404.php">Web applications
													<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
														<g>
															<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
														</g>
													</svg>
												</a></li>
												<li><a href="404.php">Desktop applocations
													<svg version="1.1" id="Layer_8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
														<g>
															<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
														</g>
													</svg>
												</a></li>
												<li><a href="404.php">Mobile applications
													<svg version="1.1" id="Layer_8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
														<g>
															<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
														</g>
													</svg>
												</a></li>
												<li><a href="404.php">ERP solutions
													<svg version="1.1" id="Layer_8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
														<g>
															<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
														</g>
													</svg>
												</a></li>
												<li><a href="404.php">AR / VR
													<svg version="1.1" id="Layer_8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
														<g>
															<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
														</g>
													</svg>
												</a></li>
												<li><a href="404.php">Software maintenance
													<svg version="1.1" id="Layer_9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
														<g>
															<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
														</g>
													</svg>
												</a></li>
											</ul>
										</li>
										<li class="<?php echo $page5; ?>">
											<a href="about.php">ABOUT US
											<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
											</svg>
										</a></li>
										<li class="<?php echo $page6; ?>">
											<a href="contact.php">CONTACT
											<svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
											</svg>
										</a></li>
									</ul>
								</div>
								<div class="main_menu_contact ml-auto">
									<div class="main_menu_phone"><img src="images/phone-call.svg" alt=""><span>+237 691 224 472</span></div>
									<div class="main_menu_email"><img src="images/envelope.svg" alt=""><span>contact@yabain.com</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- Menu -->

			<div class="menu">
				<div class="menu_register_login">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="menu_register_login_content d-flex flex-row align-items-center justify-content-end">
									<div class="register"><a href="#" onclick="msg()">Register</a></div>
									<div class="login"><a href="404.php">Login</a></div>
								</div>
							</div>
						</div>
					</div>
						
				</div>
				<ul class="menu_list">
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="index.php">Home</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="news.php">News</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="tech.php">Tech</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="services.php">Services</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="about.php">About us</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="contact.php">contact</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</header>
	
<?php
}
?>