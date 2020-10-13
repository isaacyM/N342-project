<?php
	include "header.php";
?>
	<body>
		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a class="logo">SEFI</a>
			</header>

			<?php
				include "menu.php";
			?>
		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>Welcome</h1>
						<p>Please make sure to log-in or register</p>
					<ul class="actions">
						<li><a href="login.php" class="button scrolly">Login</a></li>
					</ul>
					<ul class="actions">
						<li><a href="register.php" class="button scrolly">Register</a></li>
					</ul>

				</div>
			</section>



		<!-- Scripts -->
		<?php 
			include "footer.php";
			include "script.php";
		?>
	</body>
</html>