<?php
	include "header.php";
	require_once("jSession.php");
	if(checkJudgeSession())
	{
		header("Location: login.php");
	}
?>
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

				if (isset($_POST['submit']))
				{
					header("Location: .php");
				}
			?>

			<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Check-in</h1>
						<p>If you have not checked in for event please make sure to do so</p>
						<div class="6u$ 12u$(small)">
							<input type="checkbox" id="check-in" name="check-in">
							<label for="check-in">Check-in</label>
						</div>
							
							<input class = "submit" type="submit" name = "submit"  value="Check-in" />

					</header>

				</div>
			</section>
		<?php 
            		include "footer.php";
            		include "script.php";
		?>

	</body>
</html>