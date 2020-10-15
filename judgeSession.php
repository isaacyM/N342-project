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
			<a href="index.php" class="logo">SEFI</a>
		</header>

		<!--Navigation menu-->
		<?php
			include "menu.php";
		?>

		<h1 align = "center"><a href="#">Judge Session</a></h1>

        <div align="center" class="container">
			<div class="row">
				<div class="col-sm-6">
					<a href="existJudgeSession.php" class="button big">
						<i class="fas fa-database"></i>
					</a><br />
					<b>Existing Judge Sessions</b>
                </div>
                <div class="col-sm-6">
					<a href="addJudgeSession.php" class="button big">
						<i class="fas fa-plus-square"></i>
					</a><br />
					<b>Add New Judge Session</b>
                </div>
            </div>
		</div><br />

		<!-- Footer and Scripts-->
		<?php 
            include "footer.php";
            include "script.php";
		?>
	</body>
</html> 

