<?php include "../src/gaurd.php";
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Document Settings -->
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="vcs,yasclinic,yasclinicgroup,virtualcaresolutions" />
	<meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
	<meta name="description" content="YAS Clinic Group , VCS" />
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="../assets/images/fav.ico">

	<!-- Page Title -->
	<title>VCS | Virtual Care Solution</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,600,700,900,200' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="../assets/css/bootstrap.css">

	<!-- Custom css file -->
	<link rel="stylesheet" href="../assets/css/style.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="../assets/css/jquery.fullPage.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/photoswipe.css">
	<link rel="stylesheet" href="../assets/css/default-skin/default-skin.css">
	<link rel="stylesheet" href="../assets/css/animate.css">
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">

</head>

<body class="agora-theme">

	<!-- Container -->
	<main class="container">
		<!-- Mobile Menu -->
		<div class="mobile-menu-overlay transition">
			<div class="mobile-menu" style="display:flex;align-items: center;">
				<i class="fa fa-times fa-2x"></i>
			</div>
			<ul class="mobile-menu-content">
				<li class="mobile-menu-item">
					<a href="#">Applications</a>
					<!-- Drop Down -->
					<ul>
						<li><a href="https://emr.virtualcaresolution.de/" target="_blank">EMR</a></li>
						<li><a href="https://lms.virtualcaresolution.de/" target="_blank">LMS</a></li>
						<li><a href="https://hr.daspqw.com/" target="_blank">HxM</a></li>
					</ul>
				</li>
				<li class="mobile-menu-item">
					<a class="nav-link page-scroll" href="">My Account</a>
					<ul class="sub-menu dropdown-btn">
						<li><a href="patient/patient_dashboard.php"><?php echo $_SESSION["username"] ?> <i class="fa fa-user" aria-hidden="true"></i></a></li>
						<a id="username" style="display: none;"><?php echo $_SESSION["username"] ?></a>
						<li><a href="logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
					</ul>
				</li>
				<li class="mobile-menu-item">
					<a href="contactus.php">contact</a>
				</li>
			</ul>
		</div>
		<!-- /Mobile Menu -->

		<!-- Header -->
		<header class="transition header fixed">
			<div class="main-menu" style="display:flex;">
				<div id="logo">
					<a href="index.php">
						<img src="../assets/images/yasLogo.png" alt="yas-clinic-group" style="width:140px;height:40px;padding:1px;">
					</a>
				</div>
				<!-- Menu -->
				<nav id="menu" class="col-md-10 col-sm-10" style="display:inline; margin-left:auto;">
					<ul class="hidden-xs">
						<li>
							<a href="#">Applications</a>
							<!-- Drop Down -->
							<ul>
								<li><a href="https://emr.virtualcaresolution.de/" target="_blank">EMR</a></li>
								<li><a href="https://lms.virtualcaresolution.de/" target="_blank">LMS</a></li>
								<li><a href="https://hr.daspqw.com/" target="_blank">HxM</a></li>
							</ul>
						</li>
						<li><a href="../contactus.php">Contact</a></li>
						<!-- <li><a href="https://virtualcaresolution.de">Login</a></li> -->
						<li class="nav-item dropdown">
							<a class="nav-link page-scroll" href="">My Account</a>
							<ul class="sub-menu dropdown-btn">
								<li><a href="patient_dashboard.php"><?php echo $_SESSION["username"] ?> <i class="fa fa-user" aria-hidden="true"></i></a></li>
								<a id="username" style="display: none;"><?php echo $_SESSION["username"] ?></a>
								<li><a href="../logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
							</ul>
						</li>
					</ul>
					<div class="mobile-menu col-xs-2 pull-right visible-xs" style="display:inline-flex;">
						<i class="fa fa-bars fa-2x"></i>
					</div>
				</nav>
				<!-- /Menu -->
			</div>
		</header>
		<!-- /Header -->

		<!-- Content -->
		<section class="content fullpage transition">
			<form action="javascript:void(0)" method="post" id="ajax-form">
				<!-- Content -->
				<section class="content fullpage transition">
					<form action="javascript:void(0)" method="post" id="ajax-form">
						<!-- Section One -->
						<section class="section" id="section1">
							<div class="cover-titles">
								<div class="align-left">
									<h1 class="title">Communicate</h1>
									<p style="font-size: 34px;">For the future</p>

								</div>

							</div>
							</div>

							</div>

							<!-- <a href="#" onClick="window.open('https://app.smith.ai/chat/standalone-widget/ec95fb4d-da0c-43d2-8145-d3f8884bd3fe/', 'Chat', 'resizable,height=700,width=450'); return false;"><img src="https://s3-us-west-1.amazonaws.com/prod-smith-dynamic/static/chat/chat-icons/smithai-chat-icon.png" width="144" alt="Chat"></a> -->
						</section>
				
					</form>
					<!-- /Section One -->

				</section>
				<!-- /Content -->

				<!-- Footer -->
				<footer id="footer" class="fixed white">
					<p>© 2022 Copyright by.PQW - IT Managment consulting - Germany for YAS Clinic Group.</p>
				</footer>
				<!-- /Footer -->

	</main>
	<!-- /Container -->

	<!-- JS -->

	<!-- jquery-1.11.3.min js -->
	<script type="text/javascript" src="../assets/js/jquery-1.11.3.min.js"></script>

	<!-- Plugins -->
	<script type="text/javascript" src="../assets/js/jquery.fullPage.min.js"></script>
	<script type="text/javascript" src="../assets/js/imagesloaded.min.js"></script>
	<script type="text/javascript" src="../assets/js/masonry.​min.js"></script>
	<script type="text/javascript" src="../assets/js/website-smooth-scroll.js"></script>
	<script type="text/javascript" src="../assets/js/photoswipe.min.js"></script>
	<script type="text/javascript" src="../assets/js/photoswipe-ui-default.min.js"></script>
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

	<!-- Main js -->
	<script src="../assets/js/main.js"></script>
	<script src="../vendor/materialize.min.js"></script>
	

</body>

</html>