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

		<h1 align = "center"><a href="#">County</a></h1>

        <div align="center" class="container">
			<div class="row">
				<div class="col-sm-6">
					<a href="existCounty.php" class="button big">
						<i class="fas fa-database"></i>
					</a><br />
					<b>Existing Counties</b>
                </div>
                <div class="col-sm-6">
					<a href="addCounty.php" class="button big">
						<i class="fas fa-plus-square"></i>
					</a><br />
					<b>Add New County</b>
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