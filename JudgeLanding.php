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
				<nav class="right">
					<a href="#" class="button alt">Log in</a>
				</nav>
			</header>

			<?php
				include "menu.php";
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
							
							<input class = "submit" type="submit" name = "submit"  value="Login" />

					</header>

				</div>
			</section>

			<section id="main" class="wrapper">
				<div class="col-sm-3">
					<a href="jCheckIn.php" class="button big">
						<i class="fas fa-clock"></i>
					</a><br />
					<b>Judge Session</b>
				</div>


				<div class="col-sm-3">
					<a href="gradeLevel.php" class="button big">
						<i class="fas fa-poll"></i>
					</a><br />
					<b>Project Grade Level</b>
				</div>

				<div class="col-sm-3">
					<a href="judgeSession.php" class="button big">
						<i class="fas fa-clock"></i>
					</a><br />
					<b>Judge Session</b>
				</div>


			</section>

		<!-- Footer and Scripts-->
		
		<?php 
            		include "footer.php";
            		include "script.php";
		?>

	</body>
</html>