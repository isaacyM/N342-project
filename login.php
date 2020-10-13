<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">SEFI</a>
			</header>

			<?php
				include "menu.php";
			?>

			<?php

				$em = "";
				$cem = "";
				$pass = "";
				$cpass = "";

				$emre="*";
				$lpass = "*"
			?>

		<section id="main" class="wrapper">
			<div class="inner">

				<h1>Switch Login Screen</h1>
					<p>If you are an adminstrator click on button below to switch to adminstrator login screen</p>
				
					<a href="adminLogin.php" class = "button">switch</a>

			</div><!--close content_container-->
		</section>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">

					<header class="align-left">
					<h1>Login - Judge</h1>


					<form class = "post" method="post" action="#">
					<dl>
					<!----------------------------------------Text Boxes--------------------------------------------------------->	
							<dt>Username (Email): <?php print $emre; ?></dt>
								<input type="text" class = "form-control" value="<?php print $cem; ?>" name="email" id="email"  placeholder="example@gmail.com" />
							<br />
					

					
							<dt>Password: <?php print $lpass; ?></dt>
								<input type="password" class = "form-control" value="<?php print $cpass; ?>" name="password" id="password"  placeholder="Password" />
							<br />

							<div class="6u$ 12u$(small)">
								<input type="checkbox" id="check-in" name="check-in">
								<label for="check-in">Check-in</label>
							</div>
							
							<div>
								<input class = "submit" type="submit" name = "submit"  value="Login" />
								<input class = "submit" type="reset" name = "reset" value="Reset"/>
							</div><!--close button_small-->   
					<!----------------------------------------------------------------------------------------------------------->
					</dl>
					</form>	

					</header>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>