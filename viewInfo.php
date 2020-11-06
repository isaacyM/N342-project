<?php
	require_once "aSession.php";
	if(checkAdminSession())
	{
		header("Location: login.php");
	}
	include "header.php";
?> 

	<body>
		<!-- Header -->
		<header id="header">
			<nav class="left">
				<a href="#menu"><span>Menu</span></a>
			</nav>
			<a href="adminLanding.php" class="logo">Admin Controls</a>
		</header>

		<!--Navigation menu-->
		<?php
			include "menu.php";
		?>

		<!-- Main -->
		<section id="main" class="wrapper">
			<h1 align = "center">View Informations</h1>
			<div align="center" class="container wrapper" id = "main">
				<div class="row wrapper">
					<div class="col-sm-3">
						<a href="viewBooth.php" class="button big">
                            <i class="fas fa-store"></i>
						</a><br />
						<b>Booth</b>
					</div>
					<div class="col-sm-3">
						<a href="viewJudge.php" class="button big">
                            <i class="fas fa-gavel"></i>
						</a><br />
						<b>Judge</b>
                    </div>
					<div class="col-sm-3">
						<a href="viewProject.php" class="button big">
                            <i class="fas fa-flask"></i>
						</a><br />
						<b>Project</b>
					</div>
					<div class="col-sm-3">
						<a href="viewSession.php" class="button big">
                            <i class="fas fa-clock"></i>
						</a><br />
						<b>Session</b>
					</div>
				</div><!--close row wrapper--->
			</div><!--close container wrapper--->
		</section><!--close section--->

		<!-- Footer and Scripts-->
		<?php 
            include "footer.php";
            include "script.php";
		?>
	</body>
</html> 