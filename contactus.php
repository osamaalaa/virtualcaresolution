<?php include "src/gaurd.php";
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Document Settings -->

	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<meta name="description" content="Contact Us | YAS Clinic Group" />
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.ico">

	<!-- Page Title -->
	<title>Contact Us | Virtual Care Solution</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,600,700,900,200' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">

	<!-- Custom css file -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="assets/css/jquery.fullPage.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/photoswipe.css">
	<link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
	<link rel="stylesheet" href="assets/css/animate.css">

</head>

<body>

	<!-- Container -->
	<main class="container">

		<!-- Mobile Menu -->
		<div class="mobile-menu-overlay transition">
			<div class="mobile-menu">
				<i class="fa fa-times fa-2x"></i>
			</div>
			<ul class="mobile-menu-content">
				<li class="mobile-menu-item">
					<a href="index.php" class="dropdown">home</a>
				</li>
				<li class="mobile-menu-item">
					<a href="#" class="dropdown">Applications</a>
					<ul class="mobile-submenu">
						<li><a href="https://emr.virtualcaresolution.de/" target="_blank">EMR</a></li>
						<li><a href="https://lms.virtualcaresolution.de/" target="_blank">LMS</a></li>
						<li><a href="https://hr.daspqw.com/" target="_blank">HxM</a></li>
					</ul>
				</li>
				
				<li class="mobile-menu-item">
					<a href="#" class="dropdown">My Account</a>
					<ul class="mobile-submenu">
						<li><a href="https://emr.virtualcaresolution.de/"><?php echo $_SESSION["username"] ?> <i class="fa fa-user" aria-hidden="true"></i></a></li>
						<a id="username" style="display: none;"><?php echo $_SESSION["username"] ?></a>
						<li><a href="logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
					</ul>
				</li>


			</ul>
		</div>
		<!-- /Mobile Menu -->

		<!-- Header -->
		<header class="transition header">
			<div class="parallax">
				<div class="darker"></div>
			</div>
			<div class="main-menu">
				<div id="logo">
					<a href="index.php">
						<img src="assets/images/yasLogo.png" alt="alex-zane-logo">
					</a>
				</div>

				<!-- Menu -->
				<nav id="menu" class="col-md-10 col-sm-10">
					<ul class="hidden-xs">
						<li><a href="index.php">Home</a>
						</li>

						<li>
							<a href="blog-full-width.html" class="dropdown">Doctors</a>
						</li>
						<!-- Tier Drop Down -->


						<li>
							<a href="#">Applications</a>
							<!-- Drop Down -->
							<ul>
								<li><a href="https://emr.virtualcaresolution.de/" target="_blank">EMR</a></li>
								<li><a href="https://lms.virtualcaresolution.de/" target="_blank">LMS</a></li>
								<li><a href="https://hr.daspqw.com/" target="_blank">HxM</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link page-scroll" href="">My Account</a>
							<ul class="sub-menu dropdown-btn">
								<li><a href="profile.php"><?php echo $_SESSION["username"] ?> <i class="fa fa-user" aria-hidden="true"></i></a></li>
								<a id="username" style="display: none;"><?php echo $_SESSION["username"] ?></a>
								<li><a href="logout.php">Logout <i class="fa fa-sign-out"></i></a></li>

							</ul>
						</li>
					</ul>
					<div class="mobile-menu col-xs-2 pull-right visible-xs">
						<i class="fa fa-bars fa-2x"></i>
					</div>
				</nav>
				<!-- /Menu -->

			</div>
			<div class="item-category">
				<h1>contact</h1>
				<div class="border">
					<div></div>
				</div>
			</div>
		</header>
		<!-- /Header -->

		<!--Content-->
		<div class="content">
			<!-- Row-->
			<div class="row">
				<div class="contact-info col-sm-12">
					<div class="col-sm-6">
						<div class="phone">
							<h3>Call Us</h3>
							<p>📞 800140 </p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="email">
							<h3>Write Us a email</h3>
							<p>info@yasclinicgroup.ae</p>
						</div>
					</div>
				</div>

				<!-- Contact us form -->
				<div class="contact_form col-sm-12">
					<div class="col-sm-12">
						<h3>send a message</h3>
					</div>
					<form id="validForm">
						<div class="form-group control-group col-sm-6">
							<span><i class="fa fa-user"></i></span>
							<input class="form-control" type="text" name="name" minlength="2" placeholder="Name *">
						</div>
						<div class="form-group control-group col-sm-6">
							<span><i class="fa fa-envelope-o"></i></span>
							<input class="form-control" type="email" name="email" placeholder="Email Address *">
						</div>
						<div class="form-group control-group col-sm-12">
							<span><i class="fa fa-pencil"></i></span>
							<textarea class="form-control" type="text" name="message" placeholder="Message *"></textarea>
						</div>
						<div class="form-button col-xs-12">
							<button  type="submit" value="Send Message" name="savesubmit" class="btn center-block">
								send <i class="fa fa-paper-plane"></i>
							</button>
						</div>
					</form>
				</div>
				<!-- /Contact us form -->
			</div>
			<!-- /Row -->

			<!-- Footer -->
			<footer id="footer">
				<p>© Yas Clinic Group 2022. All rights reserved.</p>
			</footer>
			<!-- /Footer -->

		</div>
		<!-- /Content -->

	</main>
	<!-- /Container -->

	<!-- JS -->

	<!-- jquery-1.11.3.min js -->
	<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>

	<!-- Plugins -->
	<script type="text/javascript" src="assets/js/jquery.fullPage.min.js"></script>
	<script type="text/javascript" src="assets/js/imagesloaded.min.js"></script>
	<script type="text/javascript" src="assets/js/masonry.​min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/website-smooth-scroll.js"></script>
	<script type="text/javascript" src="assets/js/photoswipe.min.js"></script>
	<script type="text/javascript" src="assets/js/photoswipe-ui-default.min.js"></script>

	<!-- Main js -->
	<script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>