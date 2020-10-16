
<?php
	require_once "aSession.php";
	if(checkAdminSession())
	{
		header("Location: login.php");
	}
	include "header.php";
	require_once "dbconnect.php";
?>
	<body>
		<!-- Header -->
		<header id="header">
			<nav class="left">
				<a href="#menu"><span>Menu</span></a>
			</nav>
			<a href="booth.php" class="logo">BOOTH</a>
		</header>
		
		<!--Navigation menu-->
		<?php
			include "menu.php";
		?>

		<h1 align = "center"><a href="#">Existing Booth Numbers</a></h1>
		
		<!-- Main -->
		<div class="container">	
            <h1>Existing Content</h1>
            <p>gggg</p>
            <input type="reset" name ="reset" value="Reset" class="alt" />
            <h2>ggg</h2>
		</div><!--close container-->

		<!-- Footer and Scripts-->
		<?php 
			include "footer.php";
			include "script.php";
		?>
	</body>
</html>