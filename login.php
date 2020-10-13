<?php
	session_start();
?>

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

		<?php 
			include "footer.php";
			include "script.php";
		?>

	</body>
</html>