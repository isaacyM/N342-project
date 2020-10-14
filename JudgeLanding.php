<?php
	require_once("jSession.php");
	if(checkJudgeSession())
	{
		header("Location: login.php");
	}
	include "header.php";
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
					</header>

				</div>
			</section>

			<section id="main" class="wrapper">
				<dl>
					<dt>Active:</dt>
					<dt>
						<input type="radio" name="active" id = "yes" value = "Yes" <?php print $yesChecked; ?> checked />
						<label for="yes">Yes</label>

						<input type="radio" name="active" id = "no" value = "No" <?php print $noChecked; ?> />
						<label for="no">No</label>
					</dt>
				</dl>
			</section>

		<!-- Footer and Scripts-->
		<?php 
			include "footer.php";
			include "script.php";
		?>
	</body>
</html>