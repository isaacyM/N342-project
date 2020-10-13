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

			$em = "test"; // temp username for testing

			$pass = "123";// temp password for testing 

			$cem = "";
			$cpass = "";


			$emre="*";
			$lpass = "*";
		
			$msg = "";

		if (isset($_POST['enter'])) //check if this page is requested after Submit button is clicked
		{


			$cem = trim($_POST['email']);

			$cpass = trim($_POST['password']); 
			
			if($cem != $em)
			{
				$emre = "<br /><span style=\"color:red\"> Username was incorrect</span><br />";
			}	
			if(($cpass != $pass))
			{
				$lpass = "<br /><span style=\"color:red\">Password was incorrect</span><br />";
			}
			if($cpass == "")
			{
				$lpass = "<br /><span style=\"color:red\">Please type in password</span><br />";
			}			


			if(($cem != $em) || ($cpass != $pass) || ($cpass == ""))
			{
				$msg = "<br /><span style=\"color:red\">Failed to Login</span><br />";
				print $msg;
			}
			else
			{
				$msg = "<br /><span style=\"color:green\">Logged In</span><br />";
				print $msg;	
				$_SESSION['email']= $em;
				header("Location: judgeLanding.php");
			}
			

			

		}
            



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
								<input type="text" maxlength = "50" value="<?php print $cem; ?>" name="email" id="email"  placeholder="example@gmail.com" />
							<br />
					

					
							<dt>Password: <?php print $lpass; ?></dt>
								<input type="password" maxlength = "50" value="<?php print $cpass; ?>" name="password" id="password"  placeholder="Password"/> <br />

							<br />

							<div class="6u$ 12u$(small)">
								<input type="checkbox" id="check-in" name="check-in">
								<label for="check-in">Check-in</label>
							</div>
							
							<div>
								<input name="enter" class="btn" type="submit" value="Login" />
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